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
            <h1 class="card-header"></h1>
            <div class="card-body">

    <h2 class="text-center">Tambah Data SPP</h2><br>
    <form action="proses_tambah_spp.php" method="post">
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
    Angkatan :
        <input type="text" name="angkatan" value="" placeholder=" Masukkan Angkatan" class="form-
            control"><br><br>
    Tahun :
        <input type="text" name="tahun" value="" placeholder=" Masukkan Tahun Masuk Anda" class="form-control"><br>
    Nominal :
        <input type="text" name="nominal" value="" placeholder=" Masukkan Nominal Pembayaran" class="form-control"><br>
        <br><br>
        
    <button type="submit" class="btn btn-success">Tambah Data SPP</button><br><br>
    </form>
            </div>
    </div>
    </div>
</div>



   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>