<?php 
    session_start();
    $err = [];
    $users = [
        "asif@dti.ac" => "123456",
        "abir@dipti.com.bd" => "123456",
        "kaka@chacha.com" => "123456",
    ];
    function safe($data)
    {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
    if(isset($_POST['sub123']) && $_SERVER['REQUEST_METHOD'] === "POST"){
        $email = safe($_POST['email']);
        $pass = safe($_POST['pass']);
        if(empty($email)){
            $err["email"] = "Please write your email address";
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $err["email"] = "Invalid email address";
        }

        if(empty($pass)){
            $err['pass'] = "Please provide your password";
        }elseif(strlen($pass) < 6){
            $err['pass'] = "Please provide a strong password";
        }

        if(count($err) === 0){
            if(isset($users[$email]) && $users[$email] === $pass){
                $_SESSION['uemail'] = $email;
            }else{
                $err['login'] = "Invalid user info";
            }
            
        }
    }

    if(isset($_GET['logout']) && $_GET['logout'] === "142"){
        session_unset();
        header("location: ".basename($_SERVER['PHP_SELF']));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <?php  
        if(!isset($_SESSION['uemail'])){
    ?>
    <h2>Login Form</h2>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" placeholder="Email Address" name="email" autocomplete="off" value="<?= $email ?? null ?>">
        <input type="password" placeholder="Password" name="pass" autocomplete="off" value="<?= $pass ?? null ?>">
        <input type="submit" name="sub123">
    </form>
    <?php  
        foreach($err as $errs){
            echo "<div style='color:red'>$errs</div>";
        }
        }else{
    ?>
    <h1>Welcome <?= $_SESSION['uemail'] ?? null ?></h1>
    <a href="<?= basename($_SERVER['PHP_SELF']) ?>?logout=142">
        <button>Logout</button>
    </a>
    <?php } ?>
</body>
</html>