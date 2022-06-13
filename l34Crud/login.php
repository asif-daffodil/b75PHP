<?php  
    include_once("./header.php");
    if(isset($_SESSION['user'])){
        header("location: ./index.php");
    }
    include_once("./formSubmit.php");
?>
<div class="container">
    <div class="row d-flex min-vh-100">
        <div class="col-md-5 m-auto p-4 border rounded shadow">
            <h2 class="mb-3">Login Form</h2>
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
                    <input type="text" placeholder="Your Email" name="email" class="form-control" value="<?= $email ?? null ?>">
                </div>
                <div class="mb-3">
                    <input type="password" placeholder="Password" name="pass" class="form-control" value="<?= $email ?? null ?>">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Log in" class="btn btn-primary" name="log123">
                </div>
            </form>
        </div>
    </div>
</div>



    

<?php  
    include_once("./footer.php");
?>