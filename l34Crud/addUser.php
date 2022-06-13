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
    <div class="col-md-8 p-4">
      <h2 class="mb-3">Add New User</h2>
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
      <form action="" method="post">
        <div class="mb-3">
          <input
            type="text"
            placeholder="User Name"
            name="name"
            class="form-control"
            value="<?= $name ?? null ?>"
          />
        </div>
        <div class="mb-3">
          <input
            type="text"
            placeholder="User Email"
            name="email"
            class="form-control"
            value="<?= $email ?? null ?>"
          />
        </div>
        <div class="mb-3">
          <input
            type="password"
            placeholder="Password"
            name="pass"
            class="form-control"
            value="<?= $email ?? null ?>"
          />
        </div>
        <div class="mb-3">
          <input type="submit" value="Add User" class="btn btn-primary" name="addUser123" />
        </div>
      </form>
    </div>
  </div>
</div>

<?php  
    include_once("./footer.php");
?>
