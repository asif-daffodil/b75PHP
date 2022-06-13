<?php  
     $err = [];
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['log123'])){
        $email = safe($_POST['email']);
        $pass = safe($_POST['pass']);
        if(empty($email)){
            $err[] = "Please write your email address";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $err[] = "Invalid Email Address";
        }else{
            $crrEmail = $conn->real_escape_string($email);
        }

        if(empty($pass)){
            $err[] = "Please write your password";
        }else{
            $pass = md5($pass);
            $crrPass = $conn->real_escape_string($pass);
        }

        if(!empty($crrEmail) and !empty($crrPass)){
            $checkUser = $conn->query("SELECT * FROM `users` WHERE `email` = '$crrEmail' AND `pass` = '$crrPass'");
            if($checkUser->num_rows === 1){
                $userData = $checkUser->fetch_object();
                $_SESSION['user'] = ["name" => "$userData->name", "email" => "$userData->email", "role" => "$userData->role"];
                unset($err);
                echo "<script>alert('Login Successfull')</script>";
                header("location: ./index.php");
            }else{
                $err[] = "Invalid user or password";
            }
        }
    }
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addUser123'])){
        $name = safe($_POST['name']);
        $email = safe($_POST['email']);
        $pass = safe($_POST['pass']);
        if(empty($email)){
            $err[] = "Please write user email address";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $err[] = "Invalid Email Address";
        }else{
            $email = $conn->real_escape_string($email);
            $CheckPreEmail = $conn->query("SELECT * FROM `users` WHERE `email` = '$email'");
            if($CheckPreEmail->num_rows > 0){
                $err[] = "Email address already exicts";
            }else{
                $crrEmail = $conn->real_escape_string($email);
            }
        }

        if(empty($name)){
            $err[] = "Please write the user name";
        }elseif(!preg_match("/^[A-Za-z. ]*$/", $name)){
            $err[] = "Invalid Name Format";
        }else{
            $crrName = $conn->real_escape_string($name);
        }

        if(empty($pass)){
            $err[] = "Please write your password";
        }else{
            $pass = md5($pass);
            $crrPass = $conn->real_escape_string($pass);
        }

        if(!empty($crrEmail) and !empty($crrPass) and !empty($crrName)){
            $insertUser = $conn->query("INSERT INTO `users` (`name`, `email`, `pass`, `role`) VALUES ('$crrName', '$crrEmail', '$crrPass', 'user')");

            if(!$insertUser){
                $err[] = "Something went wrong";
            }else{
                echo "<script>alert('User Added Successfully')</script>";
                $name = $email = $pass = null;
            }
        }
    }

    function safe ($data)
    {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
?>