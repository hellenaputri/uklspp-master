<!DOCTYPE html>
<html lang="en">
<head>
 <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.m
in.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
    <title></title>
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
            <h1 class="card-header">Tambah Kelas</h1>
            <div class="card-body">

    <h2 class="text-center">Tambah Kelas</h2><br>
    <form action="proses_tambah_kelas.php" method="post">

    Nama Kelas :
        <input type="text" name="nama_kelas" value="" placeholder=" Masukkan Nama Kelas" class="form-
            control"><br><br>
    Jurusan :
        <input type="text" name="jurusan" value="" placeholder=" Masukkan Nama Kelompok" class="form-control"><br>
    Angkatan :
        <input type="number" name="angkatan" value="" placeholder=" Masukkan Nama Kelompok" class="form-control"><br>
        
    <button type="submit" class="btn btn-success">Tambah Kelas</button><br><br>
    </form>
            </div>
    </div>
    </div>
</div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</div>
</body>
</html>