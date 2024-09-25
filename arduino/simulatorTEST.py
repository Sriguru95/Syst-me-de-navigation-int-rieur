import random
import requests
import json
import time
import math

def generate_angles():
    # Coordonnées des bornes UWB
    floor1_bornes = [
        {'x': 4, 'y': 4, 'z': 0},
        {'x': 30, 'y': 4, 'z': 0},
        {'x': 4, 'y': 10, 'z': 0}
    ]

    # Coordonnées de l'utilisateur
    user_coordinates = {'x': random.uniform(2, 40), 'y': random.uniform(1, 9), 'z': 0}

    # Génére des angles en fonction des distances entre l'utilisateur et les bornes UWB
    angles = []
    for borne in floor1_bornes:
        dx = borne['x'] - user_coordinates['x']
        dy = borne['y'] - user_coordinates['y']
        dz = borne['z'] - user_coordinates['z']
        distance = (dx**2 + dy**2 + dz**2) ** 0.5
        # Contrainte : la distance ne doit pas dépasser une certaine valeur
        distance = min(distance, 10)  # Par exemple, 10 mètres
        angle = math.atan2(dy, dx) * 180 / math.pi  # Convertir en degrés
        angles.append(angle)

    return {'bornes': floor1_bornes, 'angles': angles}

def send_data_to_server(data):
    url = "http://localhost:3000/localization_data"  
    headers = {'Content-Type': 'application/json'}
    response = requests.post(url, data=json.dumps(data), headers=headers)

    if response.status_code == 200:
        print("Angles envoyés avec succès au serveur.")
    else:
        print("Échec de l'envoi des angles au serveur. Statut de réponse:", response.status_code)

if __name__ == "__main__":
    while True:
        angles = generate_angles()
        send_data_to_server(angles)
        time.sleep(2)  # Attendre 2 secondes avant de générer et d'envoyer de nouveaux angles
