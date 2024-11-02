# docker-public-ip
A simple website in a container that shows your public ip address. (Based on **Debian** with **Apache**/**PHP**)

# Screenshot
![docker-ip-output](https://github.com/user-attachments/assets/cf1b2924-94ea-42c9-a3d4-9c5b8a69530d)

## Usage:
1. Clone/download this repository
2. Unpack/cd into the directory
3. Run
```
$ make
```
4. After the image is built run

```
$ make run
```
5. Go to http://localhost:9000/

## Note:
The website is by design minimal and only does one thing: display your public IP Address.
