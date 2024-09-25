import time
import socket
import json
import requests

hostname = socket.gethostname()
UDP_IP = socket.gethostbyname(hostname)
print("***Local ip:" + str(UDP_IP) + "***")
UDP_PORT = 80
sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
sock.bind((UDP_IP, UDP_PORT))
sock.listen(1)  # nombre de connexion
data, addr = sock.accept()

distance_a1_a2 = 1  # Distance entre chaque point en mètres


def read_data():
    line = data.recv(1024).decode('UTF-8')
    uwb_list = []

    try:
        uwb_data = json.loads(line)
        print(uwb_data)

        uwb_list = uwb_data["links"]
        for uwb_archor in uwb_list:
            print(uwb_archor)

    except:
        print(line)
    print("")

    return uwb_list


def tag_pos(a, b, c):
    cos_a = (b * b + c*c - a * a) / (2 * b * c)
    x = b * cos_a
    y = b * (1 - cos_a * cos_a) ** 0.5

    return round(x.real, 1), round(y.real, 1)


def uwb_range_offset(uwb_range):
    temp = uwb_range
    return temp


def send_data_to_server(data):
    url = "http://192.168.43.196:5500/localization_data"
    headers = {'Content-Type': 'application/json'}
    response = requests.post(url, data=json.dumps(data), headers=headers)
    if response.status_code == 200:
        print("Data successfully sent to the server.")
    else:
        print("Failed to send data to the server. Status code:", response.status_code)


def main():
    a1_range = 0.0
    a2_range = 0.0

    while True:
        node_count = 0
        lst = read_data()

        for one in lst:
            if one["A"] == "84":
                a1_range = uwb_range_offset(float(one["R"]))
                node_count += 1

            if one["A"] == "85":
                a2_range = uwb_range_offset(float(one["R"]))
                node_count += 1

        if node_count == 2:
            x, y = tag_pos(a2_range, a1_range, distance_a1_a2)
            data = {"x": x, "y": y}
            send_data_to_server(data)

        time.sleep(0.1)


if __name__ == '__main__':
    main()
