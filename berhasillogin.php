<?php
    session_start();
    if ($_SESSION['user']=="")
    {
        header("location:login.php");
    }
?>

<html>
    selamat datang<?php echo $_SESSION['user'];?>...

    <p>
        <a href="logout.php">
        kembali ke halaman login
        </a>
    </p>
</html>