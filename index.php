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
      <!-- open jumbotron -->
      <div class="jumbotron">
        <h1>Hai BPFK 'ers</h1>
        <p>Selamat Datang di APP KAK</p>
        
      </div>
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#login_modal">LOGIN</button>
      <!-- end jumbotron -->
    </div>

    <!-- MODAL login -->
  <div class="modal fade" id="login_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <!-- form -->
            <form method="POST" action ="proseslogin.php" class="form-signin">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>Login</b></h4>
                </div>
                <div class="modal-body">
                    <div class="hasil-data">
                    <!-- isi -->
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> <br>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3">
                    <!-- end sis -->
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="btn_login" value="Login" class="btn btn-default">
                </div>
            </div>
            </form>

            <!-- end form -->
        </div>
    </div>
  <!-- END MODAL EDIT -->


</body>
<script src="jquery/jquery.min.js"></script>
<script src="jquery/bootrap.min.js"></script>
</html>