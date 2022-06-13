<?php  
    include_once("./header.php");
    if(!isset($_SESSION['user'])){
        header("location: ./login.php");
    }
?>
<div class="container-fluid">
  <div class="row">
    <?php include_once("./sideBar.php") ?>
    <div class="col-md-8"></div>
  </div>
</div>

<?php  
    include_once("./footer.php");
?>
