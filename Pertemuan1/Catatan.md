# Catatan Pertemuan 1

## Perihal untuk semester 4
Persyaratan Wajib :
- Buat Analisa (dalam bentuk .md)
- Buat Catatan (dalam bentuk .md)
- Buat Coding

## Persyaratan Analisa:
- Minimal ada 5W 1H & SWOT

## Rincian Project sebelum UTS :
- bikin website company profile

## Pembahasan HTML
HTML (HyperText Markup Language) merupakan bahasa general yang digunakan untuk mendevelops website

## Rincian pada .env :
Contoh code pada .env
```yaml
COMPOSE_PROJECT_NAME=esgul
REPOSITORY_NAME=pemweb
IMAGE_TAG=latest
```
### Penjelasan
- COMPOSE_PROJECT_NAME : digunakan untuk menamakan project nya
- REPOSITORY_NAME : digunakan untuk menamakan repository (pada kasus ini disesuaikan dengan matakuliah pemrograman web)
- IMAGE_TAG : digunakan untuk menyesuaikan dengan versi terbaru dari docker (jadi jika ada perubahan versi pada docker maka akan menyesuaikan)

## Rincian pada docker-compose.yml :
Contoh code pada docker-compose.yml
```yaml
version: '3'
services:
  web:
    image: nginx:latest
    ports:
      - 80:80
    volumes:
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
      - ./src:/usr/share/nginx/html
```
### Penjelasan
- version : ditujukan untuk menggunakan versi terbaru dari docker 
- volumes : hal ini digunakan sebagai hdd yang ditujukan menyimpan file project, pada kasus ini terdapat file nginx.conf, dan bisa juga ditambahkan file yang baru
- ports : hal ini ditujukan untuk mengoneksikan nginx (webserver) 

## Rincian pada nginx.conf :
Contoh code pada nginx.conf
```yaml
server { 
    listen 80;
    server_name localhost;

    root /usr/share/nginx/html;
    index index.html;

    location / {
        try_files $uri $uri/ =404;
    }
}
```
### Penjelasan
- location : digunakan untuk menentukan lokasi penyimpanan untuk file project