
<?php
    if($_POST){
        $nisn=$_POST['nisn'];
        $nis=$_POST['nis'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $no_telp=$_POST['no_tlp'];
        $id_kelas=$_POST['id_kelas'];
       
            include "koneksi.php";
            $insert=mysqli_query($koneksi,"INSERT INTO siswa(nisn, nis, nama, alamat, no_tlp, id_kelas)
            value
            ('".$nisn."','".$nis."','".$nama."','".$alamat."','".$no_telp."','".$id_kelas."')") or die(mysqli_error($koneksi));
             if ($insert) {
                echo "<script>alert('Sukses menambahkan siswa');location.href='tampil_siswa.php';</script>";
            }

            else {
                echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
            }
        }
    
?>
      