<?php
include_once('top.php');
include_once('menu.php');
?>
<head>

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="Template/css/styles.css" rel="stylesheet" />

</head>
<style>
    h1{
        font-family: poppins, sans-serif;
        font-weight: 500;
        text-decoration: none;
    }
    

   
</style>
<body>
<main>
    <div class="container-fluid px-4">
        <marquee><h1 class="mt-4">Selamat datang di halaman Puskesmas.id</h1></marquee>

        <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    font-family: poppins, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: white;
    text-align: center;
    
    font-family: poppins, sans-serif;
    text-decoration: none;
}


/* style.css */

nav {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
}

.container {
    max-width: 165px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 24px;
    font-weight: bold;
}

ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

li {
    margin: 0 10px;
}

a {
    text-decoration: none;
    color: #fff;
}

.menu-toggle {
    display: none; /* Sembunyikan menu toggle pada layar besar */
    cursor: pointer;
}

.icon-bar {
    display: block;
    width: 20px;
    height: 3px;
    background-color: #fff;
    margin: 2px;
}

/* Gaya untuk menu responsive (layar kecil) */
@media (max-width: 768px) {
    nav {
        flex-direction: column;
        align-items: flex-start;
    }

    ul {
        flex-direction: column;
        margin-top: 20px;
        padding: 10px;
    }

    li {
        margin: 5px 0;
    }

    .menu-toggle {
        display: block;
    }
}

img{
    width: 90%;
    height: 50%
}


    </style>
</head>
<body>
    <header>
       
    </header>

    <main>
        <section id="beranda">
            <h2>Selamat Datang di Puskesmas.id</h2>
            <p>Puskesmas.id adalah platform online yang menghubungkan masyarakat dengan berbagai layanan kesehatan di puskesmas di seluruh Indonesia. Kami ingin membantu Anda menemukan puskesmas terdekat, mengetahui jam buka, dan mengakses berbagai informasi kesehatan lainnya.</p>
            <a href="#layanan" class="btn">Lihat Layanan</a>
        </section>

        <section id="layanan">
            <h2>Layanan Kami</h2>
            <div class="row">
                <div class="col">
                    <img src="img/salad.jpg" alt="" style="width:100px height:50px">
                    <h3>4 sehat 5 Sempurna</h3>
                    <p>Memberikan saran makanan yang memiliki protein yang cukup untuk keseimbangan tubuh.</p>
                    <a href="#">Lihat Detail</a>
                </div>
                <div class="col">
                    <img src="img/suntik.jpg" alt="Puskesmas 2">
                    <h3>Pilihan jenis layanan kesehatan</h3>
                    <p>menyediakan layanan kesehatan gigi, kesehatan jiwa, dan konseling.</p>
                    <a href="#">Lihat Detail</a>
                </div>
                <div class="col">
                    <img src="img/obat.jpg" alt="Puskesmas 3">
                    <h3>Jenis obat</h3>
                    <p>menyediakan jenih obat-obatan yang sesuai dosis dokter.</p>
                    <a href="#">Lihat Detail</a>
                </div>
            </div>
        </section>

        <section id="tentangkami">
            <h2>Tentang Kami</h2>
            <p>Puskesmas.id didirikan oleh tim yang terdiri dari tenaga kesehatan dan profesional teknologi yang ingin meningkatkan akses masyarakat terhadap layanan kesehatan yang berkualitas. Kami percaya bahwa semua orang berhak mendapatkan layanan kesehatan yang terbaik, tanpa memandang status sosial ekonomi mereka.</p>
            <p>Puskesmas.id masih dalam tahap pengembangan, tetapi kami terus berusaha untuk menambahkan lebih banyak fitur dan layanan baru. Kami harap Anda dapat menggunakan Puskesmas.id untuk menemukan informasi kesehatan yang Anda butuhkan dan mendapatkan akses yang lebih mudah ke layanan kesehatan.</p>
        </section>

        <section id="kontak">
            <h2>Hubungi Kami</h2>
            <p>Jika Anda memiliki pertanyaan atau saran, silakan hubungi kami melalui:</p>
            <ul>
                <li>Email: info@puskesmas.id</li>
                <li>Telepon: +62 812-3456-7890</li>
                <li>Alamat: Jl. Raya Puskesmas no. 1</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Puskesmas.id</p>
    </footer>
</body>
</html>

       
    </div>
</main>
</body>


<?php
include_once('bottom.php');
?>