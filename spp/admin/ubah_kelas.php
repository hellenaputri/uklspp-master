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
    include "koneksi.php";
    $qry_get_kelas=mysqli_query($koneksi,"SELECT * FROM kelas where 
    id_kelas = '".$_GET['id_kelas']."'");
    $data_kelas=mysqli_fetch_array($qry_get_kelas);
    ?>

<div class="p-5 mb-4 bg-white text-success">
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah Kelas</h1>
            <div class="card-body">
            <form action="proses_ubah_kelas.php" method="post">
                <input type="hidden" name="id_kelas" value="<?=$data_kelas['id_kelas']?>">
    Nama Kelas :
            <input type="text" name="nama_kelas" value="<?=$data_kelas['nama_kelas']?>" class="form-control"><br>
    Jurusan :
            <input type="text" name="jurusan" value="<?=$data_kelas['jurusan']?>" class="form-control">
            <br>
    Angkatan :
            <input type="text" name="angkatan" value="<?=$data_kelas['angkatan']?>" class="form-control">
            <br><br>

            <button type="submit" class="btn btn-success">Ubah Kelas</button><br><br>
    </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>


  