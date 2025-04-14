# Analisa Teori

## **Komponen Yang Digunakan Pada Pemrograman**
## 1. HTML (HYperText Markup Language)

### Analisis 5W 1H
1. WHAT (Apa itu HTML ?)
HTML merupakan bahasa yang cukup umum digunakan untuk mendevelop struktur halaman web. Pada project ini, HTML digunakan untuk membuat tampilan pada website yang akan disajikan melalu server Nginx dari container Docker.
2. WHY (Mengapa HTML menjadi umum untuk diterapkan ?)
    - HTML mudah untuk dipelajari
    - Kompatibel dengan Semua Browser
3. Who (Siapa yang menggunakan HTML ?)
    - Web Developer
    - Web Design
4. WHEN (Kapan HTML digunakan ?)
    - Saat ingin membangun website baru
    - Saat ingin membuat design web
5. Where (Dimana HTML diterapkan ?)
    - Website
    - Aplikasi Web
    - Aplikasi Mobile
6. HOW (Bagaimana cara menggunakan tipe file  HTML ?)
    - Menambahkan .html diakhir nama filenya  

### Analisis SWOT
1. Strengths (Keunggulan) : Mudah dipelajari, Kompabilitasnya Luas, Ringan dan Cepat
2. Weakness (Kelemahan) : Kurangnya keamanan
3. Opportunities (Peluang) : Memiliki dukungan dari komunitas besar dalam mempelajarinya
4. Threats (Ancaman) : Perubahan standar web sehingga pemrogram perlu terus belajar dan menyesuaikan diri

## Docker
### Anlaisis 5W 1H
1. What (Apa itu Docker ?)
Docker merupakan platform open-source yang digunakan untuk mengelola aplikasi dalam container. Container biasanya berisi kode, dependensi, dan konfigurasi aplikasi agar dapat berjalan konsisten di berbagai lingkungan
2. Why (Menagapa docker lumayan sering digunakan ?)
    - Ringan & Efisien
    - Kemudahan dalam Deployment
3. Who (Siapa yang menggunakan Docker ?)
    - Developer
    - System Administrator
4. When (Kapan Docker Digunakan ?)
    - Saat pengembangan Aplikasi
    - Saat Deployment ke server
5. Where (Dimanan Docker Diterapkan ?)
    - Cloud Computing
    - Local Development Environment
6. How (Bagaimana cara menggunalan Docker ?)
    - Instalasi Docker di sistem operasi
    - Menarik Image dari Docker Hub -> docker pull nginx:latest
    - Menjalanlan Container -> docker run -d -p 80:80 nginx
    - Membuat Image Custom dengan Dockerfile.
    - Mengelola Multi-Container dengan Docker Compose → docker-compose up -d

### Analisis SWOT
1. Strengths (Keunggulan) : Mudah dalam Deployment
2. Weakness (Kelemahan) : Keamanan Container yang rentan
3. Opportunities (Peluang) : Pertumbuhan Cloud Computing semakin tinggi
4. Threats (Ancaman) : Bersaing dengan Teknologi lain, dan kompleksitas dalam skala besar

# Analisis Program
## Rincian pada .env :
File .env berfungsi untuk menyimpan variabel  agar konfigurasi lebih fleksibel dalam Docker Compose dan deployment berbasis container.

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
File docker-compose.yml ini digunakan untuk menjalankan Nginx sebagai web server dalam Docker Compose, dengan pengaturan custom konfigurasi dan file HTML dari direktori lokal.
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

## Rincian Program home.html
```yaml
<h1>Pilihan Profile Saya</h1>
```
### Penjelasan
- Untuk membuat header terbesar

```yaml
<ol>
        <li><h5><a href="profile.html">BIODATA</a></h5></li>
        <li><h5><a href="https://github.com/mrkataktampan">GITHUB Saya</a></h5></li>
        <li><h5><a href="https://www.instagram.com/faizaz8?igsh=bGoxdDU1MTd4ZDN1">INSTAGRAM Saya</a></h5></li>
        <li><h5><a href="https://youtube.com/@faizizaz8520?si=UFSdLVigouBfGBwr">YouTube Saya</a></h5></li>
        
    </ol>
```
### Penjelasan
- <ol> : Untuk membuat daftar dalam bentuk angka
- <li> : Untuk menambahkan elemen pada daftar
- <a>  : Untuk menambahkan hyperlink


## Rincian Program profile.html


## Rincian File home.html



