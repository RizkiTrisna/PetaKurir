# PetaKurir
Merupakan website sistem informasi geografis yang menampilkan peta dari api mapbox yang dibungkus dengan leaflet.js. Website ini dibangun dengan menggunakan bahasa pemrograman PHP dan menggunakan struktur MVC.

Fitur yang ditawarkan:
<ol>
  <li>Fitur CRUD pada data peta</li>
  <li>View all data peta di map</li>
  <li>View only one data di detail map</li>
  <li>Tampilan yang menarik menggunakan leaflet.js</li>
</ol>
<h2>Cara menggunakan</h2>
Anda harus mengganti field YOUR_MAPBOX_TOKEN pada baris di dalam folder view home dan peta pada baris 
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=YOUR_MAPBOX_TOKEN', {
dengan token yang sudah anda dapatkan saat registrasi di halaman resmi <a href="https://www.mapbox.com/">mapbox.com</a>

<h2>Author</h2>
A web dev freelancer, find me on <a href="https://www.instagram.com/rizkitrisna.ra">instagram</a> or <a href="http://ikitekno.com/">my blog</a>
