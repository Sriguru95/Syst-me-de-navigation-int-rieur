// Déclaration de la variable globale graph
let graph;

function parseCSV(csvData) {
    const parsedGraph = {};

    // Sépare les lignes du CSV
    const lines = csvData.split('\n');

    // Parcoure chaque ligne
    lines.forEach(line => {
        const [node, floor, edgesString] = line.split(',');

        // Initialise les arêtes
        const edges = {};
        edgesString.split(';').forEach(edge => {
            const [edgeNode, weight] = edge.split(':');
            edges[edgeNode] = parseFloat(weight);
        });

        // Ajoute les données au graphe
        parsedGraph[node] = { floor: parseInt(floor), edges };
    });

    return parsedGraph;
}

function fetchCSVAndParse() {
    // Récupére le fichier CSV via une requête HTTP
    return fetch('graph.csv')
        .then(response => response.text())
        .then(csvData => {
            // Parse le CSV et récupére le graphe
            graph = parseCSV(csvData);
            console.log('Graphe récupéré :', graph);
        })
        .catch(error => {
            console.error('Erreur lors du chargement du fichier CSV :', error);
        });
}

// Appel de la fonction pour récupérer et parser le fichier CSV
fetchCSVAndParse()
    .then(() => {
        // Une fois que le fichier CSV est récupéré et que le graphe est initialisé dans la variable graph,
        // affiche les noms de noeuds
        getAllNodeNames();
    })
    .catch(error => {
        console.error('Erreur lors du chargement et du parsing du fichier CSV :', error);
    });

// Fonction pour récupérer et afficher tous les noms de nœuds
function getAllNodeNames() {
    // Vérifie si graph est défini
    if (!graph) {
        console.error("Erreur : graph n'est pas défini.");
        return;
    }

    // Récupére les noms des nœuds à partir de l'objet graph
    const nodeNames = Object.keys(graph);

    // Filtre le premier nœud "node"
    const filteredNodeNames = nodeNames.filter(nodeName => nodeName !== "node");

    // Affiche les noms des nœuds dans la console
    console.log("Noms des nœuds :");
    filteredNodeNames.forEach(nodeName => {
        console.log(nodeName);
    });

    // Retourne le tableau contenant tous les noms des nœuds
    return filteredNodeNames;
}



//-------------------------------------------------------------------------------------

// Fonction pour effacer le chemin le plus court sur un calque SVG spécifique
function clearShortestPath(svgId) {
    let svg = document.getElementById(svgId);
    let redLines = svg.querySelectorAll('line[stroke="red"]');
    redLines.forEach(line => svg.removeChild(line));
}


// Ajoute une fonction pour charger les données du fichier CSV
function loadCSV() {
    return new Promise((resolve, reject) => {
        fetch('salles.csv')
            .then(response => response.text())
            .then(data => {
                const lines = data.split('\n').slice(1); // ignore header
                const rooms = {};
                lines.forEach(line => {
                    const [num_salle, disponibilite, raison] = line.split(',');
                    rooms[num_salle] = { disponibilite, raison };
                });
                resolve(rooms);
            })
            .catch(error => {
                reject(error);
            });
    });
}

async function findShortestPath() {
    clearShortestPath("Calque_2");
    clearShortestPath("Calque_3");

    let start = document.getElementById("start").value;
    let end = document.getElementById("end").value;
    let debut = null;

    if (start === "Votre position") {
        debut = findNearestNode(start);
        start = debut;
        let userCircle = document.getElementById("userCircle");
        let userX = parseFloat(userCircle.getAttribute("cx"));
        let userY = parseFloat(userCircle.getAttribute("cy"));
        let nearestNodeX = getNodeX(debut);
        let nearestNodeY = getNodeY(debut);
        drawLine(userX, userY, nearestNodeX, nearestNodeY, document.getElementById("Calque_2"));
    } else {
        debut = start;
    }

    // Charge les données du fichier CSV
    const rooms = await loadCSV();

    // Vérifie si la salle de destination est disponible
    if (rooms[end] && rooms[end].disponibilite === "non") {
         // Si la salle de destination n'est pas disponible, affiche un message d'erreur dans le conteneur error-message-container
         let errorMessageContainer = document.getElementById("error-message-container");
         errorMessageContainer.innerHTML = `<p style="color:red; font-weight: bold;">La salle ${end} n'est pas disponible pour la raison suivante : ${rooms[end].raison}</p>`;
         return;
    }

    // Trouve le chemin le plus court et tracez le reste du chemin
    let { linesCalque2, linesCalque3 } = drawShortestPath(dijkstra(graph, debut, end).path);

    let linesByFloor = {
        "Calque_2": linesCalque2,
        "Calque_3": linesCalque3
    };

    let startFloor = graph[start].floor;
    let endFloor = graph[end].floor;

    if (startFloor !== endFloor) {
        let firstFloor = startFloor === 2 ? "Calque_2" : "Calque_3";
        let secondFloor = startFloor === 2 ? "Calque_3" : "Calque_2";
        animateShortestPath(linesByFloor[firstFloor], firstFloor, () => {
            console.log("Premier étage terminé, déclenchement de l'animation du deuxième étage...");
            animateShortestPath(linesByFloor[secondFloor], secondFloor, () => {
                console.log("Animation du deuxième étage terminée.");
            });
        });
    } else {
        animateShortestPath(linesByFloor["Calque_" + startFloor], "Calque_" + startFloor);
    }
}





// Fonction pour trouver le nœud le plus proche de la position actuelle de l'utilisateur
function findNearestNode(start) {
    // Vérifier si graph est défini
    if (!graph) {
        console.error("Erreur : graph n'est pas défini.");
        return null;
    }

    let minDistance = Infinity;
    let nearestNode = null;

    // Récupérer les noms des nœuds à partir de l'objet graph
    const nodeNames = Object.keys(graph);

    // Filtrer le premier nœud "node"
    const filteredNodeNames = nodeNames.filter(nodeName => nodeName !== "node");

    for (let nodeName of filteredNodeNames) {
        let distance;
        if (start === "Votre position") {
            // Approximer la distance entre l'utilisateur et le nœud
            distance = calculateDistanceUserToNode(nodeName);
        } 

        if (distance < minDistance) {
            minDistance = distance;
            nearestNode = nodeName;
        }
    }

    return nearestNode;
}


// Fonction pour calculer la distance entre la position de l'utilisateur et un nœud sur le SVG
function calculateDistanceUserToNode(node) {
    // Récupérer la position actuelle de l'utilisateur depuis le SVG
    let userCircle = document.getElementById("userCircle");
    let userX = parseFloat(userCircle.getAttribute("cx"));
    let userY = parseFloat(userCircle.getAttribute("cy"));

    console.log("userCircle : " + userCircle);
    console.log("userX : " + userX);
    console.log("userY : " + userY);

    // Récupérer les coordonnées du nœud
    let nodeX = getNodeX(node);
    let nodeY = getNodeY(node);

    // Calculer la distance euclidienne entre l'utilisateur et le nœud
    return Math.sqrt(Math.pow(userX - nodeX, 2) + Math.pow(userY - nodeY, 2));
}

// Fonction pour trouver le plus court chemin avec l'algorithme de Dijkstra
function dijkstra(nodes, start, end) {
    let distances = {};
    let previousNodes = {};
    let visited = new Set();

    // Initialisation des distances et des nœuds précédents
    for (let node in nodes) {
        distances[node] = Infinity;
        previousNodes[node] = null;
    }
    distances[start] = 0;

    // Mise à jour des distances et des nœuds précédents
    while (!visited.has(end)) {
        let closestNode = findClosestNode(nodes, distances, visited);
        if (!closestNode) break;
        visited.add(closestNode);
        updateDistances(nodes, closestNode, distances, previousNodes);
    }

    // Reconstitution du chemin
    let path = [];
    let currentNode = end;
    while (currentNode) {
        path.unshift(currentNode);
        currentNode = previousNodes[currentNode];
    }

    // Après avoir calculé le chemin le plus court, retourner également les distances minimales
    return { path, distances };
}

// Fonction utilitaire pour trouver le nœud non visité avec la distance la plus courte
function findClosestNode(nodes, distances, visited) {
    let closestNode = null;
    let shortestDistance = Infinity;
    for (let node in distances) {
        if (!visited.has(node) && distances[node] < shortestDistance) {
            closestNode = node;
            shortestDistance = distances[node];
        }
    }
    return closestNode;
}

// Fonction pour mettre à jour les distances et les nœuds précédents
function updateDistances(nodes, node, distances, previousNodes) {
    for (let neighbor in nodes[node].edges) {
        let totalDistance = distances[node] + nodes[node].edges[neighbor];
        if (totalDistance < distances[neighbor]) {
            distances[neighbor] = totalDistance;
            previousNodes[neighbor] = node;
        }
    }
}


// Fonction pour stocker les lignes à dessiner progressivement pour chaque étage
function drawShortestPath(shortestPath) {
    let linesCalque2 = [];
    let linesCalque3 = [];
    let linesInterFloor = []; // Stocke les connexions entre les étages
    for (let i = 0; i < shortestPath.length - 1; i++) {
        let node1 = shortestPath[i];
        let node2 = shortestPath[i + 1];
        // Vérifiez à quel étage appartient chaque nœud
        if (graph[node1].floor === 2 && graph[node2].floor === 2) {
            linesCalque2.push({ x1: getNodeX(node1), y1: getNodeY(node1), x2: getNodeX(node2), y2: getNodeY(node2) });
        } else if (graph[node1].floor === 3 && graph[node2].floor === 3) {
            linesCalque3.push({ x1: getNodeX(node1), y1: getNodeY(node1), x2: getNodeX(node2), y2: getNodeY(node2) });
        } else {
            // Si le chemin passe d'un étage à un autre, stockez ces connexions séparément
            linesInterFloor.push({ x1: getNodeX(node1), y1: getNodeY(node1), x2: getNodeX(node2), y2: getNodeY(node2) });
        }
    }
    return { linesCalque2, linesCalque3, linesInterFloor };
}





// Fonction pour dessiner une ligne entre deux points sur le SVG
function drawLine(x1, y1, x2, y2, svg) {
    let line = document.createElementNS("http://www.w3.org/2000/svg", "line");
    line.setAttribute("x1", x1);
    line.setAttribute("y1", y1);
    line.setAttribute("x2", x2);
    line.setAttribute("y2", y2);
    line.setAttribute("stroke", "red");
    line.setAttribute("stroke-width", "1");
    svg.appendChild(line);
}

// Fonction pour obtenir la coordonnée X d'un nœud sur le SVG
function getNodeX(node) {
    return parseFloat(document.getElementById(node).getAttribute("cx"));
}

// Fonction pour obtenir la coordonnée Y d'un nœud sur le SVG
function getNodeY(node) {
    return parseFloat(document.getElementById(node).getAttribute("cy"));
}

function animateShortestPath(lines, svgId, callback) {
    let svg = document.getElementById(svgId);
    let delay = 1;
    let index = 0;
    drawNextLine(lines[index], svg, delay, index, lines, callback);
}

function drawNextLine(line, svg, delay, index, lines, callback) {
    if (!line) {
        // Vérifie si line est undefined et arrête la fonction si c'est le cas
        if (callback) {
            // Appel du callback une fois que toutes les lignes ont été dessinées
            callback();
        }
        return;
    }

    let length = Math.sqrt(Math.pow(line.x2 - line.x1, 2) + Math.pow(line.y2 - line.y1, 2));
    let iterations = Math.ceil(length);
    let dx = (line.x2 - line.x1) / iterations;
    let dy = (line.y2 - line.y1) / iterations;
    let x = line.x1;
    let y = line.y1;
    let count = 0;
    let drawInterval = setInterval(() => {
        x += dx;
        y += dy;
        drawLine(line.x1, line.y1, x, y, svg);
        count++;
        if (count >= iterations) {
            clearInterval(drawInterval);
            index++;
            if (index < lines.length) {
                setTimeout(() => drawNextLine(lines[index], svg, delay, index, lines, callback), delay);
            } else {
                if (callback) {
                    // Appel du callback une fois que toutes les lignes ont été dessinées
                    callback();
                }
            }
        }
    }, delay);
}

//----------------------------------------------------------------------------------------------------
let etageActuel = 0;
const totalEtages = 3;

function afficherEtage(direction) {
    let prochainEtage = etageActuel + direction;
    if (prochainEtage >= 0 && prochainEtage <= totalEtages) {
        document.getElementById('etage' + etageActuel).style.display = 'none';
        document.getElementById('etage' + prochainEtage).style.display = 'block';
        etageActuel = prochainEtage;
        document.getElementById('compteur').textContent = etageActuel;
    } 
}



//-------------------------


// Variable pour stocker l'identifiant de l'intervalle de mise à jour
let updateIntervalId;

// Fonction pour mettre à jour la position de l'utilisateur
function updatePosition() {
    // Effacer les anciennes données
    svg.innerHTML = '';
    
    // Fetch location data from server and draw on SVG
    fetch('http://192.168.43.196:5500/localization_data')
    .then(response => response.json())
    .then(data => {
        data.bornes.forEach(borne => {
            const x = (borne.x / numColumns) * width;
            const y = (borne.y / numRows) * height;
            createCircle(x, y, 'borne');
        });

        // Utiliser les coordonnées relatives de l'utilisateur par rapport à la première borne
        const userX = (data.user_estimated_coordinates.x / numColumns) * width;
        const userY = (data.user_estimated_coordinates.y / numRows) * height;
        createCircle(userX, userY, 'user');
    })
    .catch(error => console.error('Error fetching location data:', error));
}

// Fonction pour démarrer la mise à jour automatique
function startAutoUpdate() {
    // Mettre à jour immédiatement
    updatePosition();
    // Démarrer la mise à jour automatique toutes les 1 seconde
    updateIntervalId = setInterval(updatePosition, 1000);
}

// Fonction pour arrêter la mise à jour automatique
function stopAutoUpdate() {
    // Arrêter l'intervalle de mise à jour automatique
    clearInterval(updateIntervalId);
}

// Fonction pour démarrer la mise à jour automatique de la position de l'utilisateur lorsqu'on clique sur le bouton
function setStartPosition() {

    let startInput = document.getElementById("start");
     
    startInput.value = `Votre position`;   

    // Démarre la mise à jour automatique
    startAutoUpdate();
}

// Écouteur d'événements pour démarrer la mise à jour automatique lors du clic sur le bouton
document.getElementById('startButton').addEventListener('click', setStartPosition);

//modal

document.addEventListener('DOMContentLoaded', function() {
    const helpButton = document.querySelector('.help-button');
    const modal = document.getElementById('modal');
    const closeButton = modal.querySelector('.close');

    // Ouvrir le modal lors du clic sur le bouton d'aide
    helpButton.addEventListener('click', function() {
        modal.classList.add('show');
    });

    // Fermer le modal lors du clic sur le bouton de fermeture
    closeButton.addEventListener('click', function() {
        modal.classList.remove('show');
    });

    // Fermer le modal lors du clic en dehors de celui-ci
    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.classList.remove('show');
        }
    });
});
