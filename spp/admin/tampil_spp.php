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
    <h1>Data SPP</h1>
    <br>
    <a href="tambah_spp.php" class="btn btn-success">Tambah SPP</a>
    <br><br>
    <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">ID SPP</th>
      <th scope="col">Nama Kelas</th>
      <th scope="col">Angkatan</th>
      <th scope="col">Tahun</th>
      <th scope="col">Nominal</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    if (isset($_POST["cari"])){
        //jika ada keyword pencarian
        $cari = $_POST['cari'];
        $query_spp = mysqli_query($koneksi, "select * from spp join kelas on kelas.id_kelas=spp.id_kelas where spp.id_spp like '%$cari%' or spp.angkatan like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_spp = mysqli_query($koneksi, "select * from spp join kelas on kelas.id_kelas=spp.id_kelas");
    }
    while ($data_spp = mysqli_fetch_array($query_spp)){
        ?>
        <tr> 
            <td><?php echo $data_spp["id_spp"];?></td>
            <td><?php echo $data_spp["nama_kelas"];?></td>
            <td><?php echo $data_spp["angkatan"];?></td>
            <td><?php echo $data_spp["tahun"];?></td>
            <td><?php echo $data_spp["nominal"];?></td>

            <td><a
            href="ubah_spp.php?id_spp=<?=$data_spp['id_spp']?>"
            class="btn btn-success">Ubah</a> | <a
            href="hapus_SPP.php?id_spp=<?=$data_spp['id_spp']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
            class="btn btn-danger">Hapus</a>
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