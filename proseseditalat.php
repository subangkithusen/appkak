<?php
include ('koneksi/config.php');
$kd_alat = $_POST['kd_alat'];
    $nama_alamat = $_POST['nama_alat'];
    $sql = mysqli_query($db,"UPDATE tb_alat SET kd_alat = '$kd_alat', nama_alamat = '$nama_alamat' WHERE kd_alat=$kd_alat");
    if ($sql) {
        //jika  berhasil tampil ini
        header("location:http://localhost/appkak/formalat.php");
    } else {
        // jika gagal tampil ini
        echo "Gagal Update: ";
    }
?>