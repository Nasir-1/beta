<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body{
        background-image : url(image1.png);
        background-size : 1500px;
    }
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Halaman Pendaftaran Murid Baru SMK PGRI 2021</title>
</head>
<body>

<div class="container">
<div class="">
<div class="">

     <!--awal card tabel-->
     <div class="card mt-5">
  <div class="card-header bg-primary text-white">
    <h4>Siswa Yang Sudah Terdaftar</h4> 
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped ">
    <tr>
        <th>No.</th>
        <th>NISN</th>
        <th>Tanggal lahir</th>
        <th>Nama Siswa</th>
        <th>jenis kelamin</th>
        <th>Nama Ortu</th>
        <th>Alamat</th>
        <th>No.hp</th>
        <th>Jurusan</th>
        <th>email</th>
        <th>gambar</th>
        <th>Aksi</th>
    </tr>
    <?php
        $nomor = 1;
        $tampil = mysqli_query($koneksi, "SELECT * from muridbaru order by id_siswa desc");
        while($data = mysqli_fetch_array($tampil)) {
    ?>
    <tr>
        <td><?=$nomor++;?></td>
        <td><?=$data['NISN_siswa'];?></td>
        <td><?=$data['TTL'];?></td>
        <td><?=$data['nama_siswa'];?></td>
        <td><?=$data['jenis_kelamin'];?></td>
        <td><?=$data['nama_ortu'];?></td>
        <td><?=$data['alamat'];?></td>
        <td><?=$data['no_hp'];?></td>
        <td><?=$data['jurusan'];?></td>
        <td><?=$data['email'];?></td>
        <td><img src="gambar/<?php echo $data['gambar']; ?>" style="width: 100px;float: left;margin-bottom: 5px;"></td>

        </td>
        <td>
            <a href="data.php?hal=edit&id=<?=$data['id_siswa']?>" class="btn btn-info">Edit</a>
            <a href="data.php?hal=hapus&id=<?=$data['id_siswa']?>"
            onclick="return confirm('yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    
    <?php } ?>
    </table>
    
        <a href="data.php">
            <button class="btn btn-warning" >Tambah data</button>
        </a>
        <a href="login.php">
            <button class="btn btn-warning" >logout</button>
        </a>
  </div>
</div>

    <!--akhir card tabel-->
</div>
</div>
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>