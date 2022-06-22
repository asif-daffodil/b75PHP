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
                $_SESSION['user'] = ["id" => "$userData->id","name" => "$userData->name", "email" => "$userData->email", "role" => "$userData->role"];
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

    if(isset($_POST['upUser']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
        $upUserEmail = safe($_POST['upUserEmail']);
        $preEmail = safe($_POST['preEmail']);
        $uid = safe($_POST['uid']);
        if(empty($upUserEmail)){
            $err[] = "Please write user email address";
        }elseif(!filter_var($upUserEmail, FILTER_VALIDATE_EMAIL)){
            $err[] = "Invalid Email Address";
        }elseif($upUserEmail === $preEmail){
            $err[] = "You provide your old email address";
        }else{
            $upUserEmail = $conn->real_escape_string($upUserEmail);
            $CheckPreEmail = $conn->query("SELECT * FROM `users` WHERE `email` = '$upUserEmail'");
            if($CheckPreEmail->num_rows > 0){
                $err[] = "Email address already exicts";
            }else{
                $crrEmail = $conn->real_escape_string($upUserEmail);
                $uid = $conn->real_escape_string($uid);
                $query = "UPDATE `users` SET `email` = '$crrEmail' WHERE `id` = $uid";
                $update = $conn->query($query);
                if(!$update){
                    $err[] = "Something went wrong";
                }else{
                    $pageNo = $_GET['page'];
                    echo "<script>alert('User updated successfully');setInterval(()=>{location.href='$page?page=$pageNo'},1000)</script>";
                }
            }
        }
    }

    if(isset($_POST['delUser'])){
        $delUserId = safe($_POST['delUserId']);
        $query = "DELETE FROM `users` WHERE `id` = $delUserId";
        $delete = $conn->query($query);
        if(!$delete){
            $err[] = "Something went wrong";
        }else{
            $pageNo = $_GET['page'];
                    echo "<script>alert('User deleted successfully');setInterval(()=>{location.href='$page?page=$pageNo'},1000)</script>";
        }
    }

    if(isset($_POST['upPass123'])){
        $oldPass = safe($_POST['oldPass']);
        $newPass = safe($_POST['newPass']);
        $conformNewPAss = safe($_POST['conformNewPAss']);
        $email = safe($_POST['email']);
        if(empty($oldPass)){
            $err[] = "Please provide the old password";
        }else{
            $query = "SELECT * FROM `users` WHERE `email` = '$email'";
            $getUserData = $conn->query($query);
            $user = $getUserData->fetch_object();
            $id = $user->id;
            $convertedOldPass = md5($conn->real_escape_string($oldPass));
            if($convertedOldPass !== $user->pass){
                $err[] = "Old Password is not currect!";
            }else{
                $crrOldPas = $conn->real_escape_string($oldPass);
            }
        }

        
        if(empty($newPass)){
            $err[] = "Please write the new password";
        }elseif($oldPass === $newPass){
            $err[] = "You provide your old password";
        }elseif (strlen($newPass) < 6){
            $err[] = "Please provide a strong password";
        }else{
            $crrNewPas = $conn->real_escape_string($newPass);
        }

        if(empty($conformNewPAss)){
            $err[] = "Please provide the confirm password";
        }elseif($newPass !== $conformNewPAss){
            $err[] = "Confirm password didnot matched with the new password";
        }else{
            $crrConformNewPAss = $conn->real_escape_string($conformNewPAss);
        }
        
        if(isset($crrOldPas) && isset($crrNewPas) && isset($crrConformNewPAss)){
            $crrConformNewPAss = md5($crrConformNewPAss);
            $query = "UPDATE `users` SET `pass` = '$crrConformNewPAss' WHERE `id` = '$id'";
            $upPass = $conn->query($query);
            if(!$upPass){
                $err[] = "Something went wrong";
            }else{
                echo "<script>alert('Password updated successfully')</script>";
                $oldPass = $newPass = $conformNewPAss = null;
            }
        }
    }

    if(isset($_POST['upPro123'])){
        $name = safe($_POST['name']);
        $email = safe($_POST['email']);
        $id = safe($_POST['id']);
        $oldEmail = safe($_POST['oldEmail']);
        $realName = $_FILES['img']['name'];
        $tmpName = $_FILES['img']['tmp_name'];

        if(empty($name)){
            $err[] = "Please provide your name";
        }elseif(!preg_match('/^[A-Za-z. ]*$/', $name)){
            $err[] = "Invalid name";
        }else{
            $crrName = $conn->real_escape_string($name);
        }

        if(empty($email)){
            $err[] = "Please provide your email";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
             $err[] = "Invalid email";
        }else{
            if($email !== $oldEmail){
                $checkEmailQuery = "SELECT * FROM `users` WHERE `email` = '$email'";
                $checkEmail = $conn->query($checkEmailQuery);
                if($checkEmail->num_rows > 0){
                    $err[] = "Email Already exicts";
                }else{
                    $crrEmail = $conn->real_escape_string($email);
                }
            }else{
                $crrEmail = $conn->real_escape_string($email);
            }
        }

        if(!empty($crrName) && !empty($crrEmail)){
            if(!empty($tmpName)){
            if(!getimagesize($tmpName)){
            $err[] = "Please select an image file";
           }else{
                if(!file_exists("./images")){
                   mkdir("./images");
                }
                $alfa = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                $sflAlfa = str_shuffle($alfa);
                $randomVal = substr($sflAlfa, 0, 6);
                $randomName = $randomVal.uniqid().date("ahisFdYl");
                $randomName = $randomName.basename($realName);
                $muf = move_uploaded_file($tmpName, "images/$randomName");
                if(!$muf){
                   $err[] = "Image upload problem";
               }else{
                $img = $randomName;
               }
           }
        }else{
            $id = (int) $conn->real_escape_string($id);
            $getImgData = "SELECT `img` FROM `users` WHERE `id` = $id";
            $preImgData = $conn->query($getImgData);
            $preImg = $preImgData->fetch_object();
            $img = $preImg->img;
        }
            $query = "UPDATE `users` SET `name` = '$crrName', `email` = '$crrEmail', `img` = '$img' WHERE `id` = $id";
            $updateUser = $conn->query($query);
            if(!$updateUser){
                $err[] = "Something went wrong";
            }else{
                $_SESSION['user']['name'] = $crrName;
                $_SESSION['user']['email'] = $crrEmail;
                echo "<script>alert('User updated successfully')</script>";
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