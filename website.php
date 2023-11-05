<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="webstite.css">

    <!-- FAVICON -->
    <link rel="icon" href="iconfav.png" width="32" height="32">

    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- BOOTSRATP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="logo">
            <div class="brand-logo"><img src="image/src/logo-pkk.png"></div>
        </div>
        <nav class="navigation">
            <a href="#profile">Profile</a>
            <a href="#kategori">Kategori</a>
            <a href="#skill">Skill</a>
            <a href="index.php" class="sign-in"><i class='bx bxs-user-circle'></i> Sign in</a>
            <a href="index.php" class="sign-in"><i class='bx bx-exit'></i> Sign up</a>
        </nav>
    </header>
    <!--BAGIAN PROFILE-->
    <section id="profile">
        <div class="gambar">
            <div class="aji"><img src="image/src/person-2.png"></div>
            <span>
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" widht="800" height="800">
                    <path fill="#088395"
                        d="M41.3,23.7C28.1,46.6,-25.4,46.1,-39,22.9C-52.6,-0.2,-26.3,-46,0.5,-45.7C27.2,-45.4,54.4,0.8,41.3,23.7Z"
                        transform="translate(100 100)" />
                </svg>
            </span>
        </div>
        <div class="kolom">
            <div class="title">
                <h2>Profile</h2>
                <b>Designer & Progammer</b>
            </div>
            <span>Assalamualakikum Wr.Wb</span><br>
            <article>
                "Hai, perkenalkan nama saya Aji Setiyawan, saya biasa dipanggil jiw. Saya merupakan seorang <br>Design
                UI dan Web Devlopment yang memiliki ketertarikan di dunia Teknologi dan Web Development. <br>Saat ini
                saya sedang berfokus dalam pembuatan Web, salah satunya yaitu blog yang <br>saya beri nama <a
                    href="#">Web Come</a> ini.
            </article>
            <address>
                Penulis : <a href="#">Aji Setiyawan</a>
                <hr><br>
                Profesion : Programmer and Designer
                <hr><br>
                Experience : 16 Years
                <hr><br>
                Phone : <a href="tel:+62851563929896">081563929896 </a>
                <hr><br>
                Email : <a href="mailto:ajistwn301@gmail.com">ajistwn301@gmail.com</a>
                <hr><br>
                Location : jln.Sukasenang, Sindangkasih, Ciamis, Jawa Barat.
                <hr><br>
            </address>
            <button id="view" class="btn-1" onclick="clickBtn()">Selengkapnya</button>
        </div>
    </section>
    <!--BAGIAN KATEGORI-->
    <section id="kategori">
        <div class="kolom">
            <div class="title">
                <h2>Kategori</h2>
                <b>Media Social</b>
            </div>
            <span>Mari berteman dengan Web Come.</span><br>
            <article>
                "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente exercitationem cupiditate veniam?
                <br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit inventore nemo totam ullam?.
                <br>Saat ini saya sedang berfokus dalam pembuatan Web, untuk informasi
                lebih lengkapnya bisa <br>ikuti di bawah ini.&#128071;&#128071;
            </article>
            <div class="icon">
                <a href="https:\\instagram.com\vyx.njiw" target="_blank"><i class='bx bx-md bxl-instagram'></i></a>
                <a href="https:\\github.com\ajigo77" target="_blank"><i class='bx bx-md bxl-github'></i></a>
                <a href="https:\\facebook.com\okibgustamil" target="_blank"><i
                        class='bx bx-md bxl-facebook-circle'></i></a>
                <a href="https:\\tiktok.com\aji.wiw_" target="_blank"><i class='bx bx-md bxl-tiktok'></i></a>
            </div>
            <button class="btn-2">Pelajar lebih lanjut</button>
        </div>
        <div class="gambar">
            <img src="https://img.freepik.com/free-vector/mobile-marketing-concept-illustration_114360-1497.jpg?size=626&ext=jpg&uid=R1507625&ga=GA1.2.1541761483.1673414585&semt=ais"
                width="500" height="500">
        </div>
    </section>
    <!--BAGIAN SKILL-->
    <section id="skill">
        <div class="gambar">
            <img src="https://img.freepik.com/free-vector/creativity-concept-illustration_114360-1083.jpg?size=626&ext=jpg&uid=R1507625&ga=GA1.1.1541761483.1673414585&semt=sph"
                width="500" height="500">
        </div>
        <div class="kolom">
            <div class="title">
                <h2>Skill</h2>
                <b>Point Plus</b>
            </div>
            <span>Saya memiliki beberapa keahlian diantaranya ;</span><br>
            <article>
                Pada dasarnya, basic skill seorang programmer terletak pada keterampilan logika, <br>matematika dasar,
                dan algoritma. Logika atau kemampuan problem solving akan <br>membantu programmer mengidentifikasi
                masalah hingga mencari solusi terbaik <br>untuk menangani permasalahan tersebut.
            </article>
            <div class="skill-me">
                <div class="html">
                    <label for="html">HTML</label><br>
                    <progress id="html" min="0" value="80" max="100"></progress>
                </div>
                <div class="css">
                    <label for="css">CSS</label><br>
                    <progress id="css" min="0" value="50" max="100"></progress>
                </div>
                <div class="design">
                    <label for="design">Designer</label><br>
                    <progress id="design" min="0" value="30" max="40"></progress>
                </div>
                <div class="programming">
                    <label for="Programming">Programming</label><br>
                    <progress id="Programming" min="0" value="20" max="30"></progress><br>
                </div>
                <div class="analist">
                    <label for="analist">Data Analyst</label><br>
                    <progress id="analist" min="0" value="20" max="70"></progress>
                </div>
            </div>
        </div>
    </section>

    <!--FOOTER-->
    <footer>
        <div class="content-footer">
            <h2>Web Come</h2>
            <p>copyright &copy;2023 codeOpacity. Design by <span id="pembuat">Aji Setiyawan</span></p>
        </div>
    </footer>
    <script src="webstite.js"></script>
</body>

</html>