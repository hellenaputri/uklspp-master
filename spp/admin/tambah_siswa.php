<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>

        <?php
    include "navbar.php";
    ?><br><br>

<div class="p-5 mb-4 bg-white text-success">
    <div class="container"><br>
    <div class="card">
            <h1 class="card-header">Tambah Siswa</h1>
            <div class="card-body">

    <h2 class="text-center">Tambah Siswa</h2><br>
    <form action="proses_tambah_siswa.php" method="post"><br>
    <span>NISN: </span>
            <input type="text" name="nisn" placeholder=" Masukkan NISN" class="form-control" id="exampleInputID1" required>
            
        </div>
        <br>
    <div class="mb-3">
            <span>NIS : </span>
            <input type="text" name="nis" placeholder=" Masukkan NIS" class="form-control" required>
        </div>
        <br>
    Nama Siswa :
        <input type="text" name="nama" value="" placeholder=" Masukkan Nama Siswa" class="form-
            control"><br><br>
   
    Kelas :
        <select name="id_kelas" class="form-control">
        <option selected>--Pilih Kelas--</option> 
        <?php
            include "koneksi.php";
            $qry_kelas=mysqli_query($koneksi, "select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
            echo '<option
            value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';
        }
        ?>
        </select><br><br>
    Alamat :
       <textarea name="alamat" placeholder=" Masukkan Alamat" class="form-control"
            rows="4"></textarea><br>
    No. Telpon :
        <input type="number" name="no_tlp" placeholder=" Masukkan No. Telepon Anda" class="form-
            control"><br><br>
        </select><br>
         
            <button type="submit" name="tambah" class="btn btn-success">Tambah Siswa</button><br><br>
    </form>
    </div>
    </div>
    </div>
</div>

       

 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>

 