<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pembayaran</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div style="background-image: url('/PHP/spp/foto/pipes.png'); height:1000px">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="formsignin.css">
    <link rel="stylesheet" href="button.css">
    <?php
    include "navbar.php";

    include "koneksi.php";
   
    $id = $_SESSION['id_petugas'];
    $qry_get_nisn=mysqli_query($koneksi,"SELECT * FROM siswa where nisn = '".$_GET['nisn']."'");
    $data_siswa=mysqli_fetch_array($qry_get_nisn);
    ?>
</head>
<body>
    <br>
    <br>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 style="color:green">Proses Pembayaran</h3>
                        <p>Masukkan data di bawah</p>
                        <form class="requires-validation" action="proses_pembayaran.php" method="post" novalidate>
                            <div>
                                <input type="hidden" value="<?=$data_siswa['nisn']?>" name="nisn"></input>
                            </div>
                            <div>
                                <h3>ID Petugas : <?=$id?></h2>
                            </div>
                           <div class="col-md-12">
                                <select class="form-select mt-3" name="bulan_spp" required>
                                      <option selected disabled value="">Bulan</option>
                                      <option value="1">januari</option>
                                      <option value="2">februari</option>
                                      <option value="3">maret</option>
                                      <option value="4">april</option>
                                      <option value="6">juni</option>
                                      <option value="7">Juli</option>
                                      <option value="8">agustus</option>
                                      <option value="9">September</option>
                                      <option value="10">oktober</option>
                                      <option value="11">November</option>
                                      <option value="12">Desember</option>
                               </select>
                                <div class="valid-feedback">You selected a position!</div>
                                <div class="invalid-feedback">Please select a position!</div>
                           </div>

                           <div class="col-md-12">
                              <input class="form-control" type="text" name="tahun_spp" placeholder="Tahun" required>
                               <div class="valid-feedback">Password field is valid!</div>
                               <div class="invalid-feedback">Password field cannot be blank!</div>
                           </div>
                           <br>
                           <button type="submit" class="btn btn-success" style="color:white; text-align:center">S u b m i t</button> 
                           <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="formsignin.js"></script>
</body>
</html>