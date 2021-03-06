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
<main>
        <div id="main">

        <?php
    include "navbar.php";
    ?><br>

    <div class="container">
    <h1>Data Kelas</h1>
    <form action = "tampil_kelas.php" method = "POST">
        <input type = "text" name = "cari" class = "form-control" placeholder = "Masukkan ID\Nama Kelas"/>
    </form>
    <br>
    <a href="tambah_kelas.php" class="btn btn-success">Tambah Kelas</a>
    <br><br>
    <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">ID Kelas</th>
      <th scope="col">Nama Kelas</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Angkatan</th>

      
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    include "koneksi.php";
    if (isset($_POST["cari"])){
        //jika ada keyword pencarian
        $cari = $_POST['cari'];
        $query_kelas = mysqli_query($koneksi, "select * from kelas where id_kelas like '%$cari%' or nama_kelas like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_kelas = mysqli_query($koneksi, "select * from kelas");
    }
    while ($data_kelas = mysqli_fetch_array($query_kelas)){?>
        <tr> 
            <td><?php echo $data_kelas["id_kelas"];?></td>
            <td><?php echo $data_kelas["nama_kelas"];?></td>
            <td><?php echo $data_kelas["jurusan"];?></td>
            <td><?php echo $data_kelas["angkatan"];?></td>
            <td><a
            href="ubah_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?>"
            class="btn btn-success">Ubah</a> | <a
            href="hapus_kls.php?id_kelas=<?=$data_kelas['id_kelas']?>"
            onclick="return confirm('Apakah anda yakin menghapus data ini?')" 
            class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
  </tbody>
</table>

        </div>
    </main>
  
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>