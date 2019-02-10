<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
     include('koneksi/config.php');
     namalabkak($_GET['search']);
    }
     
    function namalabkak($search){
     global $db;
     
     if ($db->connect_error) {
         die("Koneksi Gagal: " . $db->connect_error);
     }
     
     $sql = "SELECT * FROM tb_lab WHERE nama_lab LIKE '%$search%' ";
     $result = $db->query($sql);
     
     if ($result->num_rows > 0) {
         $list = array();
         $key=0;
         while($row = $result->fetch_assoc()) {
             $list[$key]['kd_lab'] = $row['kd_lab'];
             $list[$key]['nama_lab'] = $row['nama_lab']; 
         $key++;
         }
         echo json_encode($list);
     } else {
         echo "hasil kosong";
     }
     $db->close();
    }