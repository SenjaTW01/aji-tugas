<?php

    // if(isset($_POST["username"]) && isset($_POST["password"])){
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

    //     // Contoh pemeriksaan kesalahan
    //     if(empty($username) || empty($password)){
    //         $pesan = "Username atau password tidak boleh kosong!";
    //     } else {
            // Lakukan pemeriksaan validitas username dan password di sini.
            // Misalnya, Anda bisa memeriksa ke database atau sumber data lainnya.
            // Jika ada kesalahan, Anda dapat mengatur $pesan sesuai dengan kesalahan tersebut.
            // Jika sukses, Anda dapat mengizinkan akses ke halaman selanjutnya.
    //     }
    // }
    
    // $username = $_POST["username"];
    // $password = $_POST["password"];
    
    // if($username=="ajiw" AND $password=="123456"){
    //     $_SESSION["username"]=$username;
    //     header("location:dasboard.php");
    // }else{
    //     // header("location:index.php?login_error");
    //     header("login-error");
    // }

    session_start(); // Mulai sesi jika belum dimulai

    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "aji" && $password == "123456") {
            $_SESSION["username"] = $username;
            // header("location: https://digital-talenand.vercel.app/"); // akan pindah halaman jika login
            header("location: website.php");
        } else {
            header("location: index.php?login_error"); // akan kembali ke halaman login dengan pesan kesalahan jika login gagal
        }
    } else {
        // akan memunculkan pesan error jika data username dan password salah
        header("location: index.php?login_error");
    }
?>