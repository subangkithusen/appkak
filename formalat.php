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
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="sweetalert2/sweetalert2.min.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CLOSE CSS -->
</head>



<body>
    <!-- Fixed navbar -->
    <!-- open nav -->
    <?php
    include("pages/nav.php");
    ?>
    <!-- end nav -->

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

<!--open form alat-->
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><B>FORM ALAT</B></h3>
  </div>
  <div class="panel-body">
  <?php
    if(isset($_POST['btn_simpan'])){
        //ketika button disimpan 
        $kd_alat = $_POST['kd_alat'];
        $nm_alat = $_POST['nm_alat'];
        //var_dump($kd_alat);
        if(!empty($kd_alat) && !empty($nm_alat)) {//tidak boleh kosong
            $sql = "INSERT INTO tb_alat(kd_alat,nama_alamat) VALUES (".$kd_alat.",'".$nm_alat."')";
            $simpan = mysqli_query($db,$sql);
            if($simpan){
                echo"sukses";
            }else{
                echo"gagal menyimpan data";
            }
        }

    }

    ?>

    <!-- form action -->
    <form action="" method="POST">
        <div class="form-group">
        <label for="formGroupExampleInput">KODE ALAT</label>
        <input type="text" class="form-control" id="" placeholder="" name="kd_alat" required>
        </div>
        <div class="form-group">
        <label for="formGroupExampleInput2">NAMA ALAT</label>
        <input type="text" class="form-control" id="" placeholder="" name="nm_alat" required>
        </div>
    
        <button type="submit" class="btn btn-primary btn-xs" name="btn_simpan">SIMPAN</button>
    </form>
    <!-- end form action  -->




  </div>
</div>

<!-- end form alat -->

  
  <hr>
  <table id="dataarsip" class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">KODE</th>
                        <th width="15%">NAMA ALAT</th>
                       
                        <th width="5%">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $sql = mysqli_query($db,'SELECT * from tb_alat ');
                    //$no = 1;
                    while ($r = mysqli_fetch_array($sql)) {
                    ?>

                    <tr align='left'>
                        
                        <td><?php echo  $r['0']; ?></td>
                        <td><?php echo  $r['1']; ?></td>
                       
            
                        <td>
                          
                            <a href='#edit_modal' class='btn btn-default btn-small btn-primary' data-toggle='modal' data-id="<?php echo  $r['0']; ?>"><i class="fa fa-edit"></i></a>
                            <a href='deletalat.php?kd_alat=<?php echo $r['0']; ?>' class='btn btn-default btn-small btn-danger' data-toggle='modal' data-id="<?php echo  $r['0']; ?>"><i class="fa fa-trash"></i></a>
                            
                            </td> 
                            
                        </td>
                    </tr>
                    <?php
                    //$no++;
                    }
                    ?>
                </tbody>
            </table>  

</div>
  <!-- end header  -->
  <!-- MODAL EDIT -->
  <div class="modal fade" id="edit_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">DETAIL ALAT</h4>
                </div>
                <div class="modal-body">
                    <div class="hasil-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
  <!-- END MODAL EDIT -->

<!-- function ubah data  -->
<?php

?>

<!-- end function  -->

<!-- OPEN JS -->
<script src="jquery/jquery.min.js"></script>
<script src="jquery/bootrap.min.js"></script>
<script src="datatables/jquery.dataTables.js"></script>
<script src="datatables/dataTables.bootstrap.js"></script>
<!-- CLOSE JS -->
<script type="text/javascript">
$(function() {
                $("#dataarsip").dataTable();
            });



</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#edit_modal').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            console.log(idx);
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detilalat.php',
                data :  'idx='+ idx,//data yang dikirim
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
</body>
</html>