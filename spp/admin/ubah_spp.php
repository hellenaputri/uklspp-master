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
    $qry_get_spp=mysqli_query($koneksi,"select * from spp where 
    id_spp = '".$_GET['id_spp']."'");
    $data_spp=mysqli_fetch_array($qry_get_spp);
    ?>

    
<div class="p-5 mb-4 bg-white text-success">
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah SPP</h1>
            <div class="card-body">
        <form action="proses_ubah_spp.php" method="post">

        <input type="hidden" name="id_spp" value=  "<?=$data_spp['id_spp']?>">
    Nama Kelas :
        <select name="id_kelas" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_kelas=mysqli_query($koneksi,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                if($data_kelas['id_kelas']==$data_spp['id_kelas']){
                    $selek="selected";
                } else {
                    $selek="";
                }
            echo '<option value="'.$data_kelas['id_kelas'].'" '.$selek.'>'.$data_kelas['nama_kelas'].'</option>';   
            }
            ?>
        </select><br>
    Angkatan :
        <input type="text" name="angkatan" value=   "<?=$data_spp['angkatan']?>" class="form-control"><br>
  
    Tahun :
        <input type="number" name="tahun" value=   "<?=$data_spp['tahun']?>" class="form-control"><br>
    Nominal :
        <input type="text" name="nominal" value=   "<?=$data_spp['nominal']?>" class="form-control">
        <br>
        <button type="submit" class="btn btn-success">Ubah SPP</button><br><br>
    </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></scrip>
   
</body>
</html>