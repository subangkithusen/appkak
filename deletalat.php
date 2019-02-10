<?php
//koneksi 
$kd_alat = $_GET['kd_alat'];
include ('koneksi/config.php');
$sql = "DELETE FROM tb_alat WHERE kd_alat = $kd_alat";
$data = mysqli_query($db,$sql);
if ($data){
    
    echo "delete sukses";
}else{

}
$db->close();
?>