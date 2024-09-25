

const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
const port = 5500;

// Middleware pour analyser les corps des requêtes HTTP
app.use(bodyParser.json());

// Middleware pour autoriser les requêtes CORS
app.use(cors());

// Tableau de bornes
const bornes = [
    { x: 3.5, y: 10.5 },
    { x: 3.5, y: 9.3 },
    { x: 17, y: 3.5 },
    { x: 17, y: 4.5 }
  ];
  

let locationData = null;

// Route POST pour recevoir les données de localisation du simulateur
app.post('/localization_data', (req, res) => {

    // Calculer les coordonnées estimées de l'utilisateur en utilisant les données reçues
    const estimatedCoordinates = req.body;
    console.log("Coordonnées estimées de l'utilisateur :", estimatedCoordinates);

    // Utilise les coordonnées de la première borne comme origine
    const origine = bornes[0];
    const userPositionRelativeToOrigin = {
        x: origine.x  + estimatedCoordinates.y,
        y: origine.y  + (-estimatedCoordinates.x)
    };

    // Mettre à jour locationData avec les nouvelles données de localisation
    locationData = { bornes, user_estimated_coordinates: userPositionRelativeToOrigin };

    // Envoyer les coordonnées estimées en réponse
    res.json(userPositionRelativeToOrigin);
});


// Route GET pour récupérer les données de localisation
app.get('/localization_data', (req, res) => {
    res.json(locationData);
});

// Démarrer le serveur
app.listen(port, '192.168.43.196', () => {
    console.log(`Serveur Node.js en écoute sur le port ${port}`);
});
