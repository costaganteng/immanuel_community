<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <link rel="icon" href="/assets/img/logo.png">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
        }

        .custom-navbar {
            height: 6rem;
            background-color: #000000 !important;
        }

        .custom-navbar .navbar-brand {
            display: flex;
            align-items: center;
            font-weight: bold;
            font-size: 20px;
        }

        .custom-navbar .navbar-brand img {
            margin-right: 0.5rem;
        }

        .navbar-collapse {
            background-color: #000000;
            padding: 10px;
        }

        .custom-navbar .nav-link {
            color: #ffffff !important;
            margin: 0rem 2rem;
            font-weight: bold;
        }

        .custom-navbar .nav-link:hover {
            color: #dddddd !important;
        }

        .navbar-nav {
            flex-direction: column;
        }

        .nav-item {
            margin-bottom: 10px;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler.active {
            background-color: #000000;
            border-radius: 5px;
        }

        .home-section {
            position: relative;
            height: calc(120vh - 6rem);
            width: 100vw;
            overflow: hidden;
        }

        .background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .welcome-text {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
        }

        .text-center {
            text-align: center;
        }

        .text-white {
            color: #ffffff;
        }

        .display-3 {
            font-size: 3rem;
        }

        .display-4 {
            font-size: 2.5rem;
        }

        .lead {
            font-size: 1.25rem;
        }

        .churches-section {
            font-weight: bold;
        }

        .font-weight-bold {
            font-weight: 700;
        }

        .fixed-top {
            z-index: 1030;
        }

        .section-imani {
            position: relative;
            background-image: url('/assets/img/pengakuan.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 5rem;
        }

        .section-imani h2 {
            font-size: 3rem;
            font-weight: bold;
            text-align: center;
        }

        .section-imani p {
            font-size: 1.25rem;
            text-align: center;
        }

        .section-imani .btn-opacity {
            display: block;
            margin: 2rem auto;
            background-color: rgba(255, 255, 255, 0.5);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            font-size: 1.25rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .section-imani .btn-opacity:hover {
            background-color: rgba(255, 255, 255, 0.7);
        }

        .pengakuan-list {
            display: none;
            margin-top: 2rem;
            color: white;
        }

        .pengakuan-list p {
            text-align: left;
            margin-left: 2rem;
        }

        .pengakuan-list ol {
            font-size: 1.25rem;
        }

        .section-lokasi {
            background-color: white;
            color: black;
            padding: 5rem 0;
            text-align: center;
        }

        .section-lokasi h2 {
            font-size: 3rem;
            font-weight: bold;
        }

        .section-lokasi h3 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-top: 1rem;
        }

        .section-lokasi h4 {
            font-size: 2rem;
            font-weight: bold;
            margin-top: 0.5rem;
        }

        .btn-lokasi {
            background-color: black;
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            font-size: 1.25rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 2rem;
        }

        .btn-lokasi:hover {
            background-color: #333;
        }

        .footer {
            background-color: #000000;
            color: #ffffff;
            padding: 3rem 0;
        }

        .footer .logo img {
            width: 50px;
            height: 50px;
            margin-right: 1rem;
        }

        .footer .footer-logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer .contact-info {
            margin-top: 1rem;
        }

        .footer .contact-info p {
            margin: 0.25rem 0;
        }

        .footer .contact-info i {
            margin-right: 0.5rem;
        }
    </style>
    <title>Immanuel Community Church</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark custom-navbar fixed-top">
        <a class="navbar-brand" href="index.php" style="color: white;">
            <img src="/assets/img/logo.png" width="55" height="55" alt="Logo" class="d-inline-block align-top">
            Immanuel Community
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars" style="color: white;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="auth/church.php">Churches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="auth/warta.php">Warta Jemaat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="auth/services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="auth/media.php">Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="auth/contact.php">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="home" class="home-section d-flex align-items-center justify-content-center" style="margin-bottom: -50px;">
        <video autoplay muted loop playsinline class="background-video">
            <source src="/assets/video/welcome.mp4" type="video/mp4">
        </video>
        <div class="welcome-text text-center">
            <h1 class="display-4 text-white" style="font-size: 100px; font-weight: bold; font-family: alex brushS"></h1>
        </div>
    </section>

    <section id="churches" class="churches-section py-5" style="padding-top: 20px;">
        <div class="container">
            <h2 class="text-center mb-4 display-3 font-weight-bold">Immanuel Community </h2>
            <p class="text-center mb-4" style="font-weight: normal; font-size: 16px">
                Immanuel Community Church adalah sebuah gereja yang berfokus pada komunitas Kristen, dengan tujuan untuk membangun iman dan memberikan pelayanan bagi jemaatnya. Gereja ini berkomitmen untuk menciptakan lingkungan yang mendukung pengembangan spiritual melalui ibadah, pengajaran Alkitab, dan kegiatan pelayanan sosial.
                Gereja ini juga mungkin menekankan pentingnya komunitas dalam kehidupan iman, mendorong anggotanya untuk berpartisipasi dalam kelompok kecil, pelayanan, serta kegiatan sosial yang bertujuan untuk mendukung satu sama lain. Fokusnya adalah pada penguatan hubungan antara jemaat dengan Tuhan serta dengan sesama dalam konteks kehidupan sehari-hari.
            </p>
            <div class="row mt-5">
                <div class="col-md-6">
                    <h3 class="display-4 text-center font-weight-bold">Visi</h3>
                    <p class="text-left" style="font-weight: normal; font-size: 16px">
                        Menjadi komunitas yang berakar kuat dalam iman kepada Kristus, yang terus bertumbuh dalam pengenalan akan Tuhan, serta berkontribusi aktif dalam masyarakat melalui kasih dan pelayanan.
                    </p>
                </div>
                <div class="col-md-6">
                    <h3 class="display-4 text-center font-weight-bold">Misi</h3>
                    <p class="text-left" style="font-weight: normal; font-size: 16px">
                        1. Menguatkan iman jemaat melalui pengajaran yang berlandaskan pada Alkitab, ibadah yang penuh kesungguhan, dan kegiatan pembinaan spiritual yang terstruktur. <br>
                        2. Membangun komunitas yang peduli dengan menyediakan tempat bagi setiap anggota untuk saling mendukung dan berinteraksi dalam kasih persaudaraan. <br>
                        3. Melayani masyarakat dengan kasih Kristus melalui program-program sosial, seperti bantuan bagi yang membutuhkan, pendidikan, dan pemberdayaan ekonomi. <br>
                        4. Mengembangkan generasi muda dengan fokus pada pendidikan spiritual dan karakter, serta mempersiapkan mereka untuk menghadapi tantangan zaman dengan iman yang kuat. <br>
                        5. Berpartisipasi dalam misi global dengan mendukung kegiatan misi untuk memberitakan Injil dan membantu gereja-gereja di berbagai belahan dunia. <br>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-imani" id="pengakuan-iman">
        <div class="container">
            <h2 style="margin-bottom: 5%;">Pengakuan Iman</h2>
            <p class="mb-4"></p>
            <button class="btn-opacity" id="toggleButton" style="border-radius: 1rem;"><a href="auth/iman.php" style="text-decoration: none; color : black;">Lihat Selengkapnya</a></button>
    </section>
    <section class="section-lokasi" id="lokasi">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsMjkj0lMJPs5Mm2YXVQLr1IO0SgFMx3k"></script>
        <style>
            #map-container {
                display: flex;
                justify-content: center;
                margin: 20px;
            }

            #map {
                height: 500px;
                width: 80%;
                max-width: 800px;
                border: 2px solid #ddd;
                border-radius: 8px;
            }

            @media (max-width: 768px) {
                #map {
                    height: 300px;
                    width: 80%;
                    max-width: 500px;
                    border: 2px solid #ddd;
                    border-radius: 8px;
                }

                .background-video {
                    height: 600px;
                    width: 100%;
                }

                #home {
                    margin-bottom: -20px;
                    /* Sesuaikan untuk tampilan kecil */
                }

                .churches-section {
                    padding-top: 5px;
                    /* Sesuaikan untuk tampilan kecil */
                }
            }
        </style>

        <h1 style="font-weight:bold;">Lokasi Gereja Immanuel Community</h1>
        <div id="map-container">
            <div id="map"></div>
        </div>

        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
        <script>
            var map = L.map('map').setView([-6.990257, 110.423727], 12);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Daftar lokasi dengan lat dan lng
            var locations = [{
                    lat: -6.970247146229344,
                    lng: 110.44178310828214,
                    link: 'https://maps.app.goo.gl/Xf7STuCnga6YZRx6A',
                    name: 'Efrata CC'
                },
                {
                    lat: -6.993138359670686,
                    lng: 110.43228676780805,
                    link: 'https://maps.app.goo.gl/FEqdSm7H6g5BmpgcA',
                    name: 'Petra CC'
                },
                {
                    lat: -6.961177897599155,
                    lng: 110.40521525060964,
                    link: 'https://maps.app.goo.gl/Q3v55r6F4tnQBv5v6',
                    name: 'Hermon CC'
                },
                {
                    lat: -7.013528470462205,
                    lng: 110.45066974875718,
                    link: 'https://maps.app.goo.gl/VgSjAnqeU5MFbWr99',
                    name: 'Eben Haezer CC'
                },
                {
                    lat: -6.963180049320967,
                    lng: 110.46595412177354,
                    link: 'https://maps.app.goo.gl/b58m5ttcCXSiCygM9',
                    name: 'Filadelfia CC'
                },
                {
                    lat: -7.033071986564515,
                    lng: 110.42206576949592,
                    link: 'https://maps.app.goo.gl/XoNWZ2FcdzYyLPb46',
                    name: 'Getsemani CC'
                },
                {
                    lat: -7.009732009288218,
                    lng: 110.42418827944661,
                    link: 'https://maps.app.goo.gl/5YpDvNnbhFifHWpG6',
                    name: 'Kana CC'
                },
                {
                    lat: -7.008943071163984,
                    lng: 110.43835475246355,
                    link: 'https://maps.app.goo.gl/GXmSZtcYXXSXtG5m8',
                    name: 'Karmel CC'
                },
                {
                    lat: -6.971460352282355,
                    lng: 110.38635229479073,
                    link: 'https://maps.app.goo.gl/Q9AKmzKrpgLdS8WY6',
                    name: 'Mahanaim CC'
                },
                {
                    lat: -6.993900997488179,
                    lng: 110.37859701213793,
                    link: 'https://maps.app.goo.gl/fzsugxnCGe6AVy958',
                    name: 'Sinai CC'
                },
                {
                    lat: -7.018796627455877,
                    lng: 110.44595025061057,
                    link: 'https://maps.app.goo.gl/mkFbUQtsEraCHqiFA',
                    name: 'Soin CC'
                }
            ];

            // Menambahkan marker untuk setiap lokasi
            locations.forEach(function(location) {
                var marker = L.marker([location.lat, location.lng]).addTo(map);

                var popupContent = `<a href="${location.link}" target="_blank">${location.name}</a>`;
                marker.bindPopup(popupContent);
            });
        </script>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center text-left">
                    <div class="logo">
                        <img src="assets/img/logo.png" alt="Logo">
                    </div>
                    <div class="footer-logo">
                        Immanuel Community
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Letjen Suprapto No.32, Kota Semarang, Jawa Tengah</p>
                        <p><i class="fas fa-building"></i> yayasan.immanuel.semarang@gmail.com</p>
                        <p><i class="fas fa-phone"></i>(024) 8414207 / 8418978</p>
                        <p><i class="fas fa-calendar-alt"></i> Hari Ibadah: Minggu, 09:00 AM & 18:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script>
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('#navbarNav');

        navbarToggler.addEventListener('click', function() {

            this.classList.toggle('active');


            if (navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
            } else {
                navbarCollapse.classList.add('show');
            }
        });
    </script>

</body>


</html>