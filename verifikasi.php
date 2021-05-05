<?php
    //aktifkan session
    session_start();
    include "koneksi.php";
    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];
    //cari data hasil login
    $datalogin = mysqli_query($koneksi, "select * from operator where user = '$user' and pass = '$pass'");
    $j=mysqli_num_rows($datalogin);
    //jika data ditemukan
    if($j>0){
        $isi = mysqli_fetch_array($datalogin);
        //buat varibel session untuk menampung nama user
        $_SESSION['user'] = $isi[0];
        header("location:data_siswa.php");
    }
    else
    {       
        echo "<script>
            alert('login gagal!');
            document.location='login.php';
        </script>";
    }

?>