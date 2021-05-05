<?php
    include "koneksi.php";

    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];

    mysqli_query($koneksi, "insert into operator values('$user','$pass')");
    header("location:registrasi.php");

?> 

