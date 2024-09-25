# 20/03/2024, Degorre

## Todo

- [ ] Expérimentations avec simulateur suggéré par E. Bigeon
- [ ] Suivi du déplacement
- [ ] Explorer contraintes dynamiques (pannes d'ascenseur, déplacements des bornes, ...)
- [ ] Interface admin
- [ ] Lien avec OSM ou Google Map ou autre service pour la navigation à l'extérieur + intérieur (prendre en compte la position des différentes entrées des bâtiments gérés).
- [ ] dès que le matériel est reçu, faire tourner du code dessus (tester émission et réception du signal, puis coder la boucle... )

## Done

- [X] amélioration IG (vérifier notamment compatibilité avec téléphones)
- [X] séparation données et code (description des graphes dans des fichiers de données ou BD)
- [/] chercher simulateur arduino -> bibliothèque trouvée non concluante

# 21/02/2024, Degorre

## DONE

- [X] Serveur, utilisant   -> NodeJS
    - [X] Algo triangulation
- [X] simulateur données de localisation (en attendant le matériel), qui va se connecter au serveur  -> Python
- [X] trouver soit fournisseur ESP32 UWB, soit alternative (le matériel apparaît maintenant sur gotronic.fr)
- [X] étendre les fonctionnalités sur étages multiples

## TODO

- [ ] amélioration IG (vérifier notamment compatibilité avec téléphones)
- [ ] séparation données et code (description des graphes dans des fichiers de données ou BD)
- [ ] chercher simulateur arduino
- [ ] dès que le matériel est reçu, faire tourner du code dessus (tester émission et réception du signal, puis coder la boucle... )

Remarque : l'essentiel de ce qui pouvait être fait sans matériel a déjà été fait.

# 31/01/2024, Degorre

## DONE

- interface web avec plans vectoriels
- graphe pour l'étage avec noeuds devant les portes des salles et aux intersections, distances entre noeuds décrites dans un fichier
- algorithme de dijkstra
  
## TODO

- [] Serveur, utilisant
  - [] Algo triangulation
- [] simulateur données de localisation (en attendant le matériel), qui va se connecter au serveur
- [] trouver soit fournisseur ESP32 UWB, soit alternative
- [] étendre les fonctionnalités sur étages multiples

# 24/01/2024, Bernardi

## TODO:
- [X] Implementer une première interface web pour affichier les etages et la position d'une personne dans un étage
- [X] Modeliser un étage an utilisant un graph
- [X] Expliquer comment implementer un algorithme de calcul du chemin en tulisant votre model d'un étage


# 24/11/2023, Degorre

Gros effort sur le sujet, qui est maintenant très bien.

Toutefois, avec BLE, on n'a pas forcément la main sur la puissance d'émission et la mesure de distance peut donc échouer.
Il faut envisager des techologies sur lesquelles on a plus de contrôle.

## TODO
- [] Faire une recherche sur les technologies radio et capteurs de distance embarquables (par exemple sur ESP32).
- [] Ajouter cette phase d'étude technologique comme objectif préliminaire au projet.
