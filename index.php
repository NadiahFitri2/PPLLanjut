<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Dinas Perhubungan Kabupaten Bangkalan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <style>
            html, body {
                height: 100%;
                margin: 0;
            }

            body {
                background-color: #f8f9fa;
                font-family: 'Poppins', sans-serif;
                color: #333;
                justify-content: space-between;
            }

            .header {
                background: linear-gradient(to bottom, #343a40, #495057);
                position: fixed;
                width: 100%;
                top: 0;
                z-index: 1000;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            }

            .header-logo {
                width: 60px;
                height: auto;
                border-radius: 50%;
                margin-left: -40px;
            }

            .nav .nav-link {
                margin: 0 10px;
                font-weight: 500;
            }

            .btn-outline-light {
                border-radius: 20px;
                margin-left: 15px;
                padding: 8px 20px;
                font-weight: bold;
                transition: all 0.3s ease;
            }

            .btn-outline-light:hover {
                background-color: #ffffff;
                color: black;
                border-color: #ffffff;
            }

            .btn-outline-light a {
                color: white;
                text-decoration: none;
            }

            .btn-outline-light a:hover {
                color: black;
            }

            .hero-section {
                height: 100vh;
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)), 
                                url('image/Foto1.png');
                background-size: 103%;
                background-position: center;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
                position: relative;
            }

            .hero-section:before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 40%;
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), transparent);
                z-index: 1;
            }

            .hero-section:after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 15%;
                background: linear-gradient(to top, rgba(255, 255, 255, 0.5), transparent);
                z-index: 1;
            }

            .hero-content {
                position: relative;
                max-width: 80%;
            }

            .hero-title {
                font-size: 1.7rem;
                font-weight: bold;
                margin-bottom: 1rem;
                color: white;
                margin-left: -400px;
            }

            .hero-subtitle {
                font-size: 3rem;
                font-weight: 550;
                margin-bottom: 0.1rem;
                margin-left: -400px;
            }

            .hero-year {
                font-size: 1.6rem;
                font-weight: bold;
                margin-top: 1rem;
                color: white;
                margin-left: -400px;
            }

            .card {
                border: none;
                border-radius: 10px;
            }

            .card img {
                width: 90%;
                border-radius: 15px;
                margin-bottom : 25px;
                margin-left : 25px;
                display: block;
                object-fit: cover;
            }

            .badge {
                font-size: 1.2rem;
                font-weight: bold;
                color: #007bff;
                background-color: rgba(128, 128, 128, 0.3);
                padding: 20px 35px;
                margin-bottom: 30px;
                margin-left: 25px;
                border-radius: 25px;
            }

            .card-title {
                font-size: 1.8rem;
                font-weight: 600;
                color: #343a40;
                margin-bottom: 15px;
                margin-left: 25px;
            }

            .card-text {
                font-size: 1.0rem;
                font-weight: 300;
                line-height: 1.6;
                color: #555;
                margin-left: 20px;
                margin-right: 25px;
                text-align:justify;
            }

            .badge_contactus {
                font-size: 1.2rem;
                font-weight: bold;
                color: #007bff;
                background-color: rgba(128, 128, 128, 0.3);
                padding: 20px 35px;
                margin-top: 20px;
                margin-left: 30px;
                margin-right: 405px;
                border-radius: 25px;
            }

            .card_contactus {
                font-size: 1.5rem;
                font-weight: 600;
                color: #343a40;
                margin-top: 30px;
                margin-bottom: 15px;
                margin-left: 30px;
            }

            .cardtext_contactus {
                font-weight: 400;
                line-height: 1.6;
                color: #343a40;
                margin-top: 30px;
                margin-left: 30px;
                margin-right: 25px;
                text-align: justify;
            }

            .cardtext_contactus strong {
                font-weight: 600;
            }

            .container {
                max-width: 87%;
            }

            .container_contactus {
                max-width: 85%;
                margin-left: 100px;
                margin-bottom: 60px;
            }

            .badge-penjelasan {
                font-size: 1.2rem;
                font-weight: bold;
                color: #007bff;
                background-color: rgba(128, 128, 128, 0.3);
                padding: 20px 35px;
                margin: 40px 425px;
                border-radius: 25px;
            }

            .title-tujuan {
                font-size: 1.8rem;
                font-weight: 600;
                color: #343a40;
                margin-bottom: 25px;
                margin-left: 31%;
            }

            .homepage-2-img {
                margin-top: 25px;
                width: 350px;
                height: 550px;
                object-fit: cover;
                border-radius: 15px;
            }

            .homepage-3-img {
                margin-top: 25px;
                width: 350px;
                height: 350px;
                object-fit: cover;
                border-radius: 15px;
            }

            .homepage-4-img {
                margin-top: 25px;
                width: 350px;
                height: 350px;
                object-fit: cover;
                border-radius: 15px;
                margin-right: 40px;
            }

            .img-homepage-5 .homepage-5-img {
                width: 500px;
                height: 450px;
                border-radius: 15px;
                margin-left: 35px;
                margin-top: 25px;
                margin-bottom: 30px;
            }

            .contact-card {
                border-radius: 12px;
                background-color: #ffffff;
            }

            .contact-us {
                display: inline-block;
                background-color: #007bff;
                color: white;
                padding: 6px 12px;
                border-radius: 12px;
                font-size: 14px;
                margin-bottom: 15px;
            }

            .footer {
                background-color: #2c2c2c;
                color: white;
                padding: 10px;
                text-align: center;
                margin-top: 50px;
                padding-top: 40px;
                padding-bottom: 40px;
            }

            .footer p {
                margin: 0;
            }
        </style>
    </head>
    
    <body>
        <header class="header bg-dark text-white">
            <div class="container py-3 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="image/logoDishub.png" alt="Logo Dishub" class="header-logo me-3">
                    <h6 class="mb-0">Dinas Perhubungan</h6>
                </div>
                <nav>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="p_formdatadiri.php">Survey</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="p_historysurvey.php">History Survey</a>
                        </li>
                    </ul>
                </nav>
                <button class="btn btn-outline-light"><a href="p_login.php">Login</a></button>
            </div>
        </header>

        <section class="hero-section text-white">
            <div class="hero-content">
                <h1 class="hero-title mb-3">Selamat Datang Di Aplikasi</h1>
                <p class="hero-subtitle">Sistem E-Survey Evaluasi</p>
                <p class="hero-subtitle">Pelayanan Transportasi Umum</p>
                <p class="hero-year">Dinas Perhubungan Kabupaten Bangkalan</p>
            </div>
        </section>

        <div class="container mt-5 pt-5">
            <div class="card shadow-lg p-3">
                <div class="row g-0 align-items-center">
                    <div class="col-md-5 d-flex justify-content-center custom-margin">
                        <img src="image/Foto2.jpeg" alt="homepage2" class="img-fluid homepage-2-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <span class="badge">Tentang</span>
                            <h3 class="card-title">E-Survey</h3>
                            <p class="card-text">
                                Sistem E-Survey untuk Evaluasi Pelayanan Transportasi Umum adalah platform berbasis web yang 
                                memungkinkan masyarakat memberikan penilaian dan masukan terkait layanan transportasi umum 
                                secara mudah dan cepat. Pengguna dapat mengakses sistem dan mereka mengisi survei yang terdiri 
                                dari beberapa pertanyaan mengenai pengalaman mereka dalam menggunakan transportasi umum, 
                                seperti ketepatan waktu, kenyamanan, kebersihan, dan keamanan. Selain survei, pengguna juga 
                                dapat memberikan feedback berupa saran atau keluhan terkait layanan yang mereka terima. Setelah 
                                mengisi survei dan feedback, pengguna dapat melihat riwayat jawaban mereka serta analisis hasil 
                                survei dalam bentuk visualisasi yang mudah dipahami. Dengan adanya sistem ini, masyarakat memiliki 
                                wadah untuk menyampaikan pendapatnya secara objektif dan transparan, sehingga dapat berkontribusi 
                                dalam meningkatkan kualitas layanan transportasi umum. Aplikasi ini dirancang agar mudah digunakan 
                                oleh semua kalangan dengan tampilan yang sederhana dan intuitif.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="card shadow-lg p-3">
                <span class="badge badge-penjelasan">Penjelasan</span>
                <h3 class="card-title title-tujuan">Tujuan dan Manfaat E-Survey</h3>

                <div class="row g-0 align-items-center mt-4 mb-5">
                    <div class="col-md-6 d-flex justify-content-start align-items-center img-homepage-3">
                        <img src="image/Foto3.jpg" alt="homepage3" class="img-fluid homepage-3-img">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text">
                                Transportasi umum adalah sarana angkutan yang disediakan untuk masyarakat luas guna memenuhi 
                                kebutuhan mobilitas sehari-hari. Layanan ini mencakup berbagai moda transportasi seperti bus, 
                                angkot, kereta api, dan kapal ferry yang dioperasikan oleh pemerintah maupun swasta. 
                                Transportasi umum berperan penting dalam mengurangi kemacetan, menekan biaya perjalanan, serta 
                                meningkatkan efisiensi dan aksesibilitas bagi masyarakat. Dengan sistem yang terorganisir, 
                                transportasi umum dapat menjadi solusi ramah lingkungan yang mendukung pembangunan berkelanjutan 
                                dan meningkatkan kualitas hidup masyarakat.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row g-0 align-items-center">
                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text">
                                Tujuan utama E-Survey Evaluasi Pelayanan Transportasi Umum adalah mengumpulkan data dan 
                                masukan dari masyarakat untuk menilai kualitas layanan transportasi umum secara objektif dan 
                                terstruktur. Sistem ini membantu mengidentifikasi tingkat kepuasan pengguna berdasarkan aspek 
                                seperti ketepatan waktu, kenyamanan, kebersihan, dan keamanan. Dengan menganalisis hasil 
                                survei, data yang diperoleh dapat dikelompokkan untuk memahami pola pengalaman pengguna. 
                                Hasilnya digunakan sebagai dasar perbaikan dan pengembangan layanan transportasi yang lebih 
                                efisien, transparan, dan sesuai dengan kebutuhan masyarakat.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <img src="image/Foto4.jpg" alt="homepage4" class="img-fluid homepage-4-img">
                    </div>
                </div>

                <div class="row g-0 align-items-center" style="margin-top:40px;">
                    <div class="col-md-6 d-flex justify-content-start align-items-center img-homepage-5">
                        <img src="image/Foto5.jpg" alt="homepage5" class="img-fluid homepage-5-img">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text">
                                E-Survey Evaluasi Pelayanan Transportasi Umum bermanfaat sebagai alat untuk mengumpulkan dan 
                                menganalisis opini masyarakat mengenai kualitas layanan transportasi. Dengan sistem ini, 
                                pengguna dapat memberikan masukan secara mudah dan transparan, sehingga membantu dalam peningkatan 
                                pelayanan transportasi umum. Data yang dikumpulkan digunakan untuk mengidentifikasi kelebihan dan 
                                kekurangan layanan berdasarkan pengalaman nyata pengguna. Selain itu, hasil analisis survei membantu 
                                pengelola transportasi dalam merancang kebijakan yang lebih efektif, meningkatkan kepuasan masyarakat, 
                                serta mendukung pengembangan sistem transportasi yang lebih efisien dan berkelanjutan. Dengan demikian, 
                                E-Survey ini berperan sebagai jembatan komunikasi antara masyarakat dan penyedia layanan transportasi 
                                untuk menciptakan sistem transportasi yang lebih baik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container_contactus mt-5">
            <div class="card shadow-lg p-3">
                <div class="row g-0 align-items-center">
                    <div class="col-md-5 d-flex justify-content-center custom-margin">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63352.04675486654!2d112.67734938691407!3d-7.067536824617484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd805e8401272c1%3A0x19d4c6367f3ff76b!2sDinas%20Perhubungan!5e0!3m2!1sen!2sid!4v1739505586408!5m2!1sen!2sid" 
                            width="700" 
                            height="450"
                            style="border:0; border-radius:15px; margin-bottom:30px; margin-left:20px; margin-right:0px; margin-top:25px;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="badge_contactus">Contact Us</div>
                            <h3 class="card_contactus">Dinas Perhubungan Kabupaten Bangkalan</h3>
                            <div class="cardtext_contactus">
                                <p><strong>Alamat :</strong></p>
                                <p>Jalan R.E. Marthadinata No.7, Wr 05, Mlajah, Kec. Bangkalan, Kabupaten Bangkalan, Jawa Timur 69116</p>
                                <p><strong>No. Telp :</strong></p>
                                <p>031 3094951</p>
                                <p><strong>E-Mail :</strong></p>
                                <p>dishub@bangkalankab.go.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="mb-1">Copyright 2025 &copy;</p>
                <p class="fw-bold">All rights reserved | Dinas Perhubungan Kabupaten Bangkalan</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>