<?php  
    include_once("./header.php");
    if(!isset($_SESSION['user'])){
        header("location: ./login.php");
    }
    include_once("./formSubmit.php");
    $id = (int) $_SESSION['user']['id'];
    $name = $_SESSION['user']['name'];
    $email = $_SESSION['user']['email'];
    $query = "SELECT * FROM `users` WHERE `id` = $id";
    $getUserData = $conn->query($query);
    $userData = $getUserData->fetch_object();
?>
<div class="container-fluid">
  <div class="row">
    <?php include_once("./sideBar.php") ?>
    <div class="col-md-8 py-5">
        <h2 class="mb-3">Update Profile</h2>
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
        <form action="" method="post" class="col-md-6" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <input type="hidden" name="oldEmail" value="<?= $email; ?>">
            <div class="mb-3">
                <input type="text" class="form-control" name="name" value="<?= $name ?? null ?>" placeholder="Your Name">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="email" value="<?= $email ?? null ?>" placeholder="Your Email">
            </div>
            <div class="mb-3">
                <img src="<?= empty($userData->img)? './images/profile.png':'./images/'.$userData->img ?>" alt="" style="height:100px" class="img-thumbnail d-block mb-2">
                <label for="img">
                    <input type="file" name="img">
                </label>
            </div>
            <input type="submit" value="Update Profile" name="upPro123" class="btn btn-dark">
        </form>
    </div>
  </div>
</div>

<?php  
    include_once("./footer.php");
?>
