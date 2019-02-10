<?php
include ('koneksi/config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APP RUANG KAK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- OPEN CSS -->
    <!-- css select 2 -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/select2.min.css" />
    <!--  end select 2 -->

    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="sweetalert2/sweetalert2.min.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CLOSE CSS -->
</head>

<!-- ketika tombol simpan di tekan -->

<?php

if(isset($_POST['btn_simpan_arsip'])){
  //hasil
  //kd_lab,kd_alat,kd_dokumen,nama_file

  $kd_lab = $_POST['kd_lab'];
  $kd_alat = $_POST['kd_alat'];
  $kd_dokumen = $_POST['kd_dokumen'];;
  $nama_file = $_POST['nama_file'];

  // var_dump($kd_lab,$kd_alat,$kd_dokumen,$nama_file);
  if(!empty($kd_lab) && !empty($kd_alat) && !empty($kd_dokumen) && !empty($nama_file)){
    //lakukann insert
    $sql = mysqli_query($db,"INSERT INTO tb_dokumen_arsip (kd_lab,kd_alat,kd_dokumen,nama_file) VALUES(".$kd_lab.",".$kd_alat.",".$kd_dokumen.",'".$nama_file."')");
    //INSERT INTO `tb_dokumen_arsip` (`id`, `kd_lab`, `kd_alat`, `kd_dokumen`, `nama_file`) VALUES (NULL, '2', '10', '4', 'kalibrasi alat bayi');
    if ($sql){

      echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <h4><i class="icon fa fa-check"></i>Melbu bos datane ^_^</h4>
            </div>';

    }
  }else{
    //kode salah 
  }





}else{

  //jika gagal 

}

?>
 
<!-- end tombol simpan  -->





<body>
    <!-- Fixed navbar -->
    <?php
    include("pages/nav.php");
    ?>

    <!-- end nav bar -->
    <!-- javascript -->
    

    <!-- end javascript -->

    <div class="container">
    




      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron" align="center">
        <H2 >APP RUANG <b>KAK</b></h2>
          <a  class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">OJO LALI MANGAN &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->
    
    <!-- header datatable -->
<div class="container">
  <!-- open form arsip -->

      <div class="panel panel-default">
        <div class="panel-heading">FORM ARSIP</div>
        <div class="panel-body">
        <!-- form  -->
        <form action="" method="POST">
        <input type="hidden" name="id">
        <div class="form-group">
        <label>LAB</label>
        <?php 
        
        ?>
        <select name="kd_lab" class="form-control">
        <?php
        $sqldokumen = mysqli_query($db,'SELECT * from tb_lab ');
        while ($rows = mysqli_fetch_assoc(@$sqldokumen)){ 
          ?>
          <option value="<?php echo $rows['kd_lab'];?>"><?php echo $rows['nama_lab'];?></option>
  
      
          <?php
          } 
          ?>
        </select>

        <label>ALAT</label>
        <select name="kd_alat" class="js-example-basic-multiple form-control">
        <?php
        $sqldokumen = mysqli_query($db,'SELECT * from tb_alat ');
        while ($rows = mysqli_fetch_assoc(@$sqldokumen)){ 
          ?>
          <option value="<?php echo $rows['kd_alat'];?>"><?php echo $rows['nama_alamat'];?></option>
  
      
          <?php
          } 

        ?>
        </select>


        <label>DOKUMEN</label>
        <select name="kd_dokumen" class="form-control dokumen">
        <?php
        $sqldokumen = mysqli_query($db,'SELECT * from tb_dokumen_jenis ');
        while ($rows = mysqli_fetch_assoc(@$sqldokumen)){ 
          ?>
          <option value="<?php echo $rows['kd_dokumen'];?>"><?php echo $rows['nama_dokumen'];?></option>
  
      
          <?php
          } 
          ?>
        
        
        
        </select>


        <div class="form-group">
        <label for="formGroupExampleInput">JUDUL</label>
        <input type="text" class="form-control" id="" placeholder="" name="nama_file" required>
        </div>

        <button type="submit" class="btn btn-primary btn-xs" name="btn_simpan_arsip">SIMPAN</button>

        </form>



        


        <!-- end form -->
      
      </div>
    </div>

    <!-- close open form arsip -->

    <!-- test data -->

    
    <!-- test data -->

  <h4>Data Arsip</h4>
  <hr>
  <table id="dataarsip" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="10%">NO</th>
                        <th width="15%">NAMA ALAT</th>
                        <th width="15%">LAB</th>
                        <th width="15%">DOKUMEN</th>
                        <th width="15%">JUDUL DOKUMEN</th>
                        <th width="10%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    //Data mentah yang ditampilkan ke tabel    
                    // mysqli_connect('localhost', 'root','');
                    // mysqli_select_db('db_arsipkak');
                    $sql = mysqli_query($db,'SELECT a.nama_alamat, b.nama_lab, c.nama_dokumen, d.nama_file 
                    FROM tb_alat a,tb_lab b,tb_dokumen_jenis c, tb_dokumen_arsip d
                    WHERE a.kd_alat = d.kd_alat and b.kd_lab = d.kd_lab and c.kd_dokumen = d.kd_dokumen ');
                    $no = 1;
                    while ($r = mysqli_fetch_array($sql)) {
                    //print_r($r['id']);
                    // var_dump($r['0']);
                    ?>

                    <tr align='left'>
                        <td><?php echo  $no;?></td>
                        <td><?php echo  $r['0']; ?></td>
                        <td><?php echo  $r['1']; ?></td>
                        <td><?php echo  $r['2']; ?></td>
                        <td><?php echo  $r['3']; ?></td>
                        <td>
                        <a href='#edit_modal_arsip' class='btn btn-default btn-small btn-primary' data-toggle='modal' data-id="<?php echo  $r['0']; ?>"><i class="fa fa-edit"></i></a>
                            <a href='delete.php?kd_alat=<?php echo $r['0']; ?>' class='btn btn-default btn-small btn-danger' data-toggle='modal' data-id="<?php echo  $r['0']; ?>"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                    }
                    ?>
                </tbody>
            </table>  

</div>


<!-- end header  -->

<!-- OPEN JS -->
<script src="jquery/jquery.min.js"></script>
<script src="jquery/bootrap.min.js"></script>
<!-- js select2 -->
<script src="jquery/select2.min.js"></script>
<!-- end js select2 -->
<script src="datatables/jquery.dataTables.js"></script>   
<script src="datatables/dataTables.bootstrap.js"></script>
<!-- CLOSE JS -->


<script type="text/javascript">
$(function() {
                $("#dataarsip").dataTable();
            });
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

$(document).ready(function () {
    $("#flash-msg").delay(2000).fadeOut("slow");
});





</script>




</body>
</html>