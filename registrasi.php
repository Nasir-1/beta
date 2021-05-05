<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body{
        background-image : url(image2.png);
        background-size : 1500px;
    }
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="modal-dialog">
    <div class="modal-content">
    

    <!--awal card form-->
    <div class="card">
    <div class="card-header bg-secondary text-white" align="center">
  
    <h3>Buat akun baru</h3>
    
  </div>
  
<div class="card-body">
    <form method="" action="tambahakun.php">
    <div class="form-group">
            <label for="">username :</label>
            <input type="text" name="user" value="" class="form-control" placeholder="masukkan username Siswa anda disini!" required>
        </div>
        <div class="form-group">
            <label for="">password :</label>
            <input type="text" name="pass" value="" class="form-control" placeholder="masukkan password Siswa anda disini!" required>
        </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="">simpan</button>
        </div>
        </form>
        <a href="login.php">
            <button class="btn btn-warning">kembali ke halaman login</button>
        </a>  
    </div>
</div> 
    <!--akhir card form-->
    </div>
    </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>