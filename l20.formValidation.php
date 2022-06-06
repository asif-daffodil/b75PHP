<?php  
    function safuda ($data) {
       $data = htmlspecialchars($data);
       $data = trim($data);
       $data = stripslashes($data);
       return $data;
    }
    $err = $msg = [];
    $gndrList = ["Male", "Female"];
    $skillList = ["HTML", "CSS", "JavaScript", "PHP"];
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['subbtn'])){
        $uname = safuda($_POST['uname']);
        $uemail = safuda($_POST['uemail']);
        $gndr = safuda($_POST['gndr'] ?? null);
        $skills = $_POST['skills'] ?? null;
        if(empty($uname)){
            $err[] = "Please write your name";
        }elseif(!preg_match('/^[A-Za-z. ]*$/', $uname)){
            $err[] = "Invalid name";
        }

        if(empty($uemail)){
            $err[] = "Please write your email address";
        }elseif(!filter_var($uemail, FILTER_VALIDATE_EMAIL)){
            $err[] = "Invalid email";
        }

        if(empty($gndr)){
            $err[] = "Please select your gender";
        }

        if(empty($skills)){
            $err[] = "Please select your skills";
        }

        if(empty($err)){
            $msg[] = "<div style='color:green'>Your Name : $uname </div>";
            $msg[] = "<div style='color:green'>Your Email : $uemail </div>";
            $msg[] = "<div style='color:green'>Your Gender : $gndr </div>";
            $skills = array_intersect($skillList, $skills);
            $msg[] = "<div style='color:green'>Your Skills : ".implode(", ",$skills)."</div>" ;
            $uname = $uemail = $gndr = $skills = null;
        }
    }
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" placeholder="Your Name" name="uname" value="<?= $uname ?? null ?>">
    <br><br>

    <input type="text" placeholder="Your Email Address" name="uemail" value="<?= $uemail ?? null ?>">
    <br><br>

    <label>Gender</label>
    <label for="gmale"><input type="radio" value="Male" name="gndr" id="gmale" <?= isset($gndr) && $gndr === "Male" ? "checked":null ?> > Male </label>
    <label for="gfemale"><input type="radio" value="Female" name="gndr" id="gfemale" <?= isset($gndr) && $gndr === "Female" ? "checked":null ?>> Female </label>
    <br><br>

    <label>Skils</label>
    <label for="html"><input type="checkbox" value="HTML" id="html" name="skills[]" <?= isset($skills) && in_array("HTML",$skills) ? "checked":null ?> > HTML </label>
    <label for="css"><input type="checkbox" value="CSS" id="css" name="skills[]" <?= isset($skills) && in_array("CSS",$skills) ? "checked":null ?> > CSS </label>
    <label for="js"><input type="checkbox" value="JavaScript" id="js" name="skills[]" <?= isset($skills) && in_array("JavaScript",$skills) ? "checked":null ?> > JavaScript </label>
    <label for="php"><input type="checkbox" value="PHP" id="php" name="skills[]" <?= isset($skills) && in_array("PHP",$skills) ? "checked":null ?>> PHP </label>
    <br><br>

    <input type="submit" value="Submit" name="subbtn">
</form>
<?php
    foreach($err as $er){
        echo "<div style='color:red'>$er</div>";
    }
    foreach($msg as $ms){
        echo $ms;
    }
?>
 