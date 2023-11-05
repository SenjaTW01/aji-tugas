<?php

    // if(isset($_POST["username"]) && isset($_POST["password"])){
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

    //     // Contoh pemeriksaan kesalahan
    //     if(empty($username) || empty($password)){
    //         $pesan = "Username atau password tidak boleh kosong!";
    //     } else {
    //         // Lakukan pemeriksaan validitas username dan password di sini.
    //         // Misalnya, Anda bisa memeriksa ke database atau sumber data lainnya.
    //         // Jika ada kesalahan, Anda dapat mengatur $pesan sesuai dengan kesalahan tersebut.
    //         // Jika sukses, Anda dapat mengizinkan akses ke halaman selanjutnya.
    //     }
    // }
    $pesan = "";
    if(isset($_GET["login_error"])){
        $pesan  = "Username atau password anda salah";
    }

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Register</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <style>
            * {
                margin:0;
                padding:0;
                font-family: 'Arial';
            }
            
            body {
                background: url('image/src/gunung.jpg')no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
            
            section {
                display:flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }
            
            .form-box {
                position: relative;
                width:400px;
                height:400px;
                background:transparent;
                display:flex;
                justify-content: center;
                align-items: center;
                border: 2px solid #fff;
                border-radius: 25px;
                backdrop-filter: blur(50px);
                overflow: hidden;
                padding:15px 15px;
                transition: .2s ease-in-out;
            }
            
            .form-box .login,
            .form-box .register {
                font-size: 16px;
                font-weight: 200;
            }
            
            .form-box .form-value {
                padding:0 25px;
            }
            
            /*Ini dari class javascript*/
            .active {
                height: 550px;
                margin: 30px 0px;
            }
            
            .form-box .login {
                transition: transform .20s ease-in;
                transform: translateX(0);
            }
            
            .active .login {
                transition: none;
                transform: translateX(-400px);
            }
            
            .form-box .register {
                position: absolute;
                transform: translateX(400px);
            }
            
            .active .register {
                position: absolute;
                transform: translate(-50%, -50%);
                left: 50%;
                top: 50%;
                transition: transform .20s ease-in;
            }
            
            .form-box span {
                display: flex;
                position: absolute;
                top: 0;
                right: 0;
                float: right;
                background-color: #fff;
                width: 40px;
                height: 40px;
                font-size: 28px;
                justify-content: center;
                align-items: center;
                border-bottom-left-radius: 20px;
                cursor: pointer;
            }
            
            .form-box span i {
                font-size: 33px;
                color:red;
            }
            
            h2 {
                font-size: 2em;
                color:#fff;
                text-align: center;
                font-weight: 600;
            }
            
            .input-box {
                position: relative;
                margin:30px 0;
                width:310px;
                border-bottom: 2px solid #fff;
            }
            
            .input-box label {
                position: absolute;
                top:50%;
                left:4px;
                transform: translateY(-50%);
                color:#fff;
                font-size: 1em;
                pointer-events: none;
                transition: .5s;
            }
            
            .input-box input {
                width: 100%;
                height: 50px;
                background:transparent;
                outline: none;
                border: none;
                font-size: 1em;
                color: #fff;
            }
            
            .form-box .register .input-box select {
                width: 100%;
                height: 50px;
                background:transparent;
                outline: none;
                border: none;
                font-size: 1em;
                color: #fff;
                cursor: pointer;
            }

            .form-box .input-box option {
                color:#000000;
            }

            .form-box .register .input-box:focus~label,
            .form-box .register .input-box:valid~label {
                top:-6px;
            }
            
            .input-box input:focus~label,
            .input-box input:valid~label {
                top:-6px;
            }
            
            .input-box i {
                position: absolute;
                right: 8px;
                color:#fff;
                font-size: 20px;
                top:10px;
                line-height: 30px;
                margin-left: 15px;
            }
            
            .forget {
                display:inline;
                font-size:15px;
                color:#fff;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                margin-top:30px;
                padding:15px 0;
            }
            
            .forget button {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 35px;
                border-radius:25px;
                outline: none;
                border:none;
                font-size: 1.1em;
                font-weight: 500;
                cursor: pointer;
                background: transparent;
                border: 2px solid #fff;
                color:#fff;
                transition: .3s;
                margin:25px 0;
            }
            
            .forget label input {
                margin-right: 5px;
                background: transparent;
                accent-color:#102C57 ;
            }
            
            .forget a {
                margin-left:5px;
                text-decoration: none;
                color:#fff;
            }
            
            .forget a:hover {
                text-decoration: underline;
            }
            
            button:hover {
                background-color: #fff;
            }
            
            button:hover #btn-login {
                color:black;
                text-decoration: none;
            }
            
            .have-count {
                text-align: center;
                color:#fff;
                font-size:15px;
            }
            
            .have-count a {
                color:#fff;
                text-decoration: none;
            }
            
            .have-count a:hover {
                text-decoration: underline;
            }

            .form-value .pesan-error {
                color:#F45050;
                padding:15px 5px;
                top:8px;
                text-align:center;
                position:relative;
            }
        </style>
    </head>
    <body>
        <section>
            <div class="form-box">
                <span><i class='bx bx-x'></i></span>
                <div class="form-value login">
                    <form action="cek_login.php" method="post">
                        <h2>Login</h2>
                        <div class="input-box">
                            <i class='bx bx-envelope'></i>
                            <input type="text" id="username" name="username" required>
                            <label>Username</label>
                        </div>
                        <div class="input-box">
                            <i class='bx bx-lock-alt'></i>
                            <input type="password" id="password" name="password" required>
                            <label>Password</label>
                        </div>
                        <div class="forget">
                            <label><input type="checkbox">Ingatkan Saya</label>
                            <a href="#">Forget Password</a>
                            <button type="submit"><div id="btn-login">Login</div></button>
                        </div>
                        <div class="have-count">
                            <p>Tidak punya akun <a href="#" class="register-link">Register</a></p>
                        </div>
                        <p class="pesan-error"><?php echo $pesan?></p>
                    </form>
                </div>
                <div class="form-value register">
                    <form action="cek_login.php" method="post">
                        <h2>Register</h2>
                        <div class="input-box">
                            <i class='bx bx-user'></i>
                            <input type="text" required>
                            <label>Username</label>
                        </div>
                        <div class="input-box">
                            <i class='bx bx-envelope'></i>
                            <input type="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <i class='bx bx-lock-alt'></i>
                            <input type="password" required>
                            <label>Password</label>
                        </div>
                        <div class="input-box">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" required>
                            <label>Confirm</label>
                        </div>
                        <div class="forget">
                            <label><input type="checkbox"> Saya setuju dengan persyaratan ini</label>
                            <a href="#">Lupa Password</a>
                            <button type="button" onclick="alert('Akun berhasil ditambahkan!');"><div id="btn-login">Sign up</div></button>
                        </div>
                        <div class="have-count">
                            <p>Anda sudah mempunyai akun <a href="#" class="login-link">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <script>
            const formBox = document.querySelector('.form-box');
            const loginLink = document.querySelector('.login-link');
            const registerLink = document.querySelector('.register-link');
            
            registerLink.addEventListener('click', () => {
                formBox.classList.add('active');
            });
            
            loginLink.addEventListener('click', () => {
                formBox.classList.remove('active');
            });
        </script>
    </body>
</html>