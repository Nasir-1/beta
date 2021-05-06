<?php
    //koneksi db 
    include "koneksi.php";

    //jika tombol simpan di klik
    if(isset($_POST['bsimpan']))
    {
        //pengujian apakah data akan di edit atau disimpan baru
        if($_GET['hal'] == "edit")
        {
            //data akan diedit
            $edit= mysqli_query($koneksi, "update muridbaru set
             NISN_siswa = '$_POST[tNISN_siswa]',
             TTL = '$_POST[tTTL]',
             nama_siswa = '$_POST[tnama_siswa]',
             jenis_kelamin = '$_POST[tjenis_kelamin]',
             nama_ortu = '$_POST[tnama_ortu]',
             alamat = '$_POST[talamat]',
             no_hp = '$_POST[tno_hp]',
             jurusan = '$_POST[tjurusan]',
             email = '$_POST[temail]',
             gambar = '$_POST[tgambar]'
             where id_siswa='$_GET[id]'
             ");
    
            if($edit)//jika edit sukses
            {
                echo "<script>
                    alert('edit data sukses!');
                    document.location='data_siswa.php';
                </script>";
            }
            else
            {
                echo "<script>
                    alert('edit data gagal!');
                    document.location='data_siswa.php';
                </script>";
            }
        }
        else
        {
            //data akan disimpan baru
            $simpan = mysqli_query($koneksi, "insert into muridbaru 
            (NISN_siswa, TTL, nama_siswa, jenis_kelamin, nama_ortu, alamat, no_hp, jurusan, email, gambar) values (
            '$_POST[tNISN_siswa]',
            '$_POST[tTTL]',
            '$_POST[tnama_siswa]',
            '$_POST[tjenis_kelamin]',
            '$_POST[tnama_ortu]',
            '$_POST[talamat]', 
            '$_POST[tno_hp]', 
            '$_POST[tjurusan]',
            '$_POST[temail]',
            '$_POST[tgambar]'
             )");
    
            if($simpan)
            {
                echo "<script>
                    alert('simpan data sukses!');
                    document.location='data.php';
                </script>";
            }
            else
            {
                echo "<script>
                    alert('simpan data gagal!');
                    document.location='data.php';
                </script>";
            }
        }

        
    }

    //pengujian jika tombol edit atau hapus di klik
    if(isset($_GET['hal']))
    {
        //tampilan yang akan di edit
        if($_GET['hal'] == "edit")
        {
            //tampilkan data yang akan di edit
            $tampil = mysqli_query($koneksi, "select * from muridbaru where id_siswa = '$_GET[id]' ");
            $data = mysqli_fetch_array($tampil);
            if($data)
            {
                //jika data ditemukan maka data ditampung ke dalam variabel
                $vNISN_siswa = $data['NISN_siswa'];
                $vTTL = $data['TTL'];
                $vnama_siswa = $data['nama_siswa'];
                $vjenis_kelamin = $data['jenis_kelamin'];
                $vnama_ortu = $data['nama_ortu'];
                $valamat = $data['alamat'];
                $vno_hp = $data['no_hp'];
                $vjurusan = $data['jurusan'];
                $vemail = $data['email'];
                $vgambar = $data['gambar'];
            }
        }
        else if ($_GET['hal'] == "hapus")
        {
            $hapus = mysqli_query($koneksi, "delete from muridbaru where id_siswa = '$_GET[id]' ");
            if($hapus){
                echo "<script>
                    alert('hapus data sukses!');
                    document.location='data.php';
                </script>";
            }
        }
    }
    
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
    <title>Halaman Pendaftaran Murid Baru SMK PGRI 2021</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>


    <div class="container">
    <div class="modal-dialog">
    <div class="modal-content">
    

    <!--awal card form-->
    <div class="card">
  <div class="card-header bg-secondary text-white" align="center">
  
    <h3>Form Input Data Pendaftaran Siswa Baru</h3>
    
  </div>
  
<div class="card-body">
    <form method="post" action="">
    <div class="form-group">
            <label for="">NI:</label>
            <input type="text" name="tNISN_siswa" value="<?=@$vNISN_siswa?>" class="form-control" placeholder="masukkan NISN Siswa anda disini!" required>
        </div>
        <div class="form-group">
            <label for="">Tanggal lahir :</label>
            <input type="date" name="tTTL" value="<?=@$vTTL?>" class="form-control" placeholder="masukkan TTL anda disini!" required>
        </div>
        <div class="form-group">
            <label for="">Nama Lengkap Siswa :</label>
            <input type="text" name="tnama_siswa" value="<?=@$vnama_siswa?>" class="form-control" placeholder="masukkan nama anda disini!" required>
        </div>
        <div class="form-group">
            <label for="">Jenis kelamin :</label>
            <select class="form-control" name="tjenis_kelamin" >
                <option value="<?=@$vjenis_kelamin?>"><?=@$vjenis_kelamin?></option>
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Nama Orang Tua :</label>
            <input type="text" name="tnama_ortu" value="<?=@$vnama_ortu?>" class="form-control" placeholder="masukkan nama orang tua anda disini!" required>
        </div>
        <div class="form-group">
            <label for="">Alamat :</label>
            <textarea class="form-control" name="talamat" placeholder="masukkan alamat anda disini!" required><?=@$valamat?></textarea>
        </div>
        <div class="form-group">
            <label for="">No.hp :</label>
            <input type="text" name="tno_hp" value="<?=@$vno_hp?>" class="form-control" placeholder="masukkan no.hp anda disini!" required>
        </div>
        <div class="form-group">
            <label for="">Jurusan :</label>
            <select class="form-control" name="tjurusan" >
                <option value="<?=@$vjurusan?>"><?=@$vjurusan?></option>
                <option value="rpl">rpl</option>
                <option value="tsm">tsm</option>
                <option value="mm">mm</option>
                <option value="apk">apk</option>
                <option value="pm">pm</option>
                <option value="ak">ak</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">email :</label>
            <input type="text" name="temail" value="<?=@$vemail?>" class="form-control" placeholder="masukkan email anda disini!" required>
        </div>
        <div class="form-group">
            <label for="">gambar :</label>
            <input type="file" name="tgambar" value="<?=@$vgambar?>" class="form-control" >
            <img src="gambar/<?php echo $data['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">

        </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="bsimpan">simpan</button>
        <button type="reset" class="btn btn-danger" name="breset">reset</button>
        </div>
        </form>
        <a href="data_siswa.php">
            <button class="btn btn-warning">lihat tabel</button>
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
