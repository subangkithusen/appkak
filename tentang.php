
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


 
<!-- end tombol simpan  -->





<body>





    <!-- Fixed navbar -->
    <!-- open navbar -->
    <?php 
    include("pages/nav.php");
    ?>
    <!-- end navbar -->
    <!-- javascript -->
    

    <!-- end javascript -->

    <div class="container">
    




      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron" align="center">
        <H2 >APP RUANG <b>KAK</b></h2>
          <p>Aplikasi dibuat saat Orientasi di ruangan KAK create by : subangkit </p>
        </p>
      </div>

    </div> <!-- /container -->
    
    <!-- header datatable -->
<div class="container">


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