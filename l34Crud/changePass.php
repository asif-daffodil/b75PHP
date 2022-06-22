<?php  
    include_once("./header.php");
    if(!isset($_SESSION['user'])){
        header("location: ./login.php");
    }
    include_once("./formSubmit.php");
?>
<div class="container-fluid">
  <div class="row">
    <?php include_once("./sideBar.php") ?>
    <div class="col-md-8 py-5   ">
        <h2 class="mb-3">Change Password</h2>
        <?php  
                if(isset($err)){
            ?>
                <div class="mb-3">
                    <?php  
                        foreach($err as $er){
                    ?>
                        <div class="text-danger">
                            <?= $er; ?>
                        </div>
                    <?php } ?>
                </div>
            <?php  
                }
            ?>
        <form action="" method="post" class="col-md-5">
            <input type="hidden" name="email" value="<?= $_SESSION['user']['email'] ?>">
            <div class="mb-3">
                <input type="password" class="form-control" name="oldPass" placeholder="Old Password" value="<?= $oldPass ?? null ?>">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="newPass" placeholder="New Password" value="<?= $newPass ?? null ?>">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="conformNewPAss" placeholder="Confirm New Password" value="<?= $conformNewPAss ?? null ?>">
            </div>
            <input type="submit" value="Update Password" name="upPass123" class="btn btn-dark">
        </form>
    </div>
  </div>
</div>

<?php  
    include_once("./footer.php");
?>
