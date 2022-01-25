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
  ?><br>

    <div class="container">
    <h1>Data Siswa</h1>
    <form action = "transaksi.php" method = "POST">
        <input type = "text" name = "cari" class = "form-control" placeholder = "Masukkan NISN\Nama Siswa"/>
    </form>
    <br>
  
    <br><br>
    <table class="table table-success table-striped">
  <thead>
    <tr>
      
      <th scope="col">NISN</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama Siswa</th>
      <th scope="col">Alamat</th>
      <th scope="col">No. Telepon </th>
      <th scope="col">Nama Kelas</th>
      <th scope="col">Bayar</th>
     
      
    </tr>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    if (isset($_POST["cari"])){
        //jika ada keyword pencarian
        $cari = $_POST['cari'];
        $query_siswa = mysqli_query($koneksi, "select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas where siswa.nisn like '%$cari%' or siswa.nama like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_siswa = mysqli_query($koneksi, "select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
    }
    while ($data_siswa = mysqli_fetch_array($query_siswa)){?>
        <tr> 
            
            <td><?php echo $data_siswa["nisn"];?></td>
            <td><?php echo $data_siswa["nis"];?></td>
            <td><?php echo $data_siswa["nama"];?></td>
            <td><?php echo $data_siswa["alamat"];?></td>
            <td><?php echo $data_siswa["no_tlp"];?></td>
            <td><?php echo $data_siswa["nama_kelas"];?></td>
            <td><a
            href="pembayaran.php?nisn=<?=$data_siswa['nisn']?>"
            class="btn btn-success">Bayar</a> <td>
           
            </td>

        </tr>
    <?php
    }
    ?>
  </tbody>
</table>

       
 

 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>