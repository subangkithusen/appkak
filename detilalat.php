<?php
include ('koneksi/config.php');
//porses update

//end proses update



if($_POST['idx']) {//mengambil dari nilai idx pada form alat
    $id = $_POST['idx'];      
    $sql = mysqli_query($db,"SELECT * FROM tb_alat WHERE kd_alat = $id");
    while ($result = mysqli_fetch_array($sql)){
    ?>
    <form action="proseseditalat.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
        <div class="form-group">
            <label>KODE ALAT</label>
            <input type="text" class="form-control" name="kd_alat" value="<?php echo $result['0']; ?>">
        </div>
        <div class="form-group">
            <label>NAMA ALAT</label>
            <input type="text" class="form-control" name="nama_alat" value="<?php echo $result['1']; ?>">
        </div>
          <button class="btn btn-primary" type="submit" name="btn_update">UPDATE</button>
    </form> 



    <?php } }





?>