
<?php
    $genderList = ['Male', 'Female'];
    $skillList = ['HTML', 'CSS', 'JavaScript', 'PHP'];

   if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sign-456'])){
       $name = safe($_POST['name']);
       $email = safe($_POST['email']);
       $gender = safe($_POST['gender'] ?? null );
       $skill = $_POST['skill'] ?? null;
       
       $err = [];

       if(empty($name)){
           $err['name'] = "Please write your name";
       }elseif(!preg_match("/^([a-zA-Z' ]+)$/", $name)){
           $err['name'] = "Invalid name!";
       }else{
           $crrName = 'valid name';
       }

       if(empty($email)){
        $err["email"] = "Please write your email";
       }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $err["email"] = "invalid email!";
       }else{
           $crrEmail = 'valid email';
       }

       if(empty($gender)){
        $err["gender"] = "Please select your gender";
       }elseif(!in_array($gender, $genderList)){
        $err["gender"] = "invalid gender!";
       }else{
           $crrGender = 'valid gender';
       }

       if(empty($skill)){
        $err["skill"] = "Please select your skill";
       }else{ foreach($skill as $sk){
           if(!in_array($sk, $skillList)){
               $err["skill"] = 'invalid skill';

           }
       }

       }
       if(!isset($err['skill'])){
           $crrSkill = 'valid skill';
       }

       }


   # Website Securing:
   function safe($data){
       $data = htmlspecialchars($data);
       $data = trim($data);
       $data = stripslashes($data);
       return $data;

   }
 
?>

<!-- HTML Block -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">

   

</head>
<body>
    <div class="container">
        <div class="row min-vh-100 d-flex">
            <div class="col-md-6 m-auto border shadow rounded p-4">
                <h2 class="mb-3 fw-400 fs-4 p-2 text-center text-white bg-primary">Registration</h2>
                <form action=" <?= $_SERVER['PHP_SELF'] ?>" method="POST">

                    <!-- Your Name -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control border-0 border-bottom shadow-none <?= isset($err['name']) ? 'is-invalid' :null ?>  <?= isset($crrName) ? 'is-valid' :null ?>" placeholder="Your Name" name="name" autocomplete="off" value="<?= $name ?? null ?> " >

                        <label for=""  class="floating-label ">Applicant's Name</label>
                        <div class="valid-feedback"> <?= $crrName ?? null ?> </div>
                        <div class="invalid-feedback"> <?= $err['name'] ?? null; ?></div>
                    </div>
                     <!-- Email Address -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control border-0 border-bottom shadow-none <?= isset($err['email']) ? 'is-invalid' :null ?> <?= isset($crrEmail) ? 'is-valid' :null ?>" placeholder="Email Address" name="email" autocomplete="off" value=" <?= $email ?? null ?>">

                        <label for="" class="floating-label">Email Address</label>
                        <div class="valid-feedback"> <?= $crrEmail ?? null ?> </div>
                        <div class="invalid-feedback"> <?= $err['email'] ?? null ?> </div>
                    </div>

                    <!-- Gender -->
                    <div class="mb-3">
                        <div class="<?= isset($err["gender"]) ? 'is-invalid' :null ?>  <?= isset($crrGender) ? 'is-valid' :null ?>">
                            <div class="form-check-inline">
                                <label class="form-check-label">Gender :</label>
                            </div>
                             <!-- Male -->
                            <div class="form-check-inline">                              
                                <label for="male" class="form-check-label">
                                    <input type="radio" id="male" name="gender" class="form-check-input" value="Male" <?= isset($gender) && $gender === 'Male' ? 'checked' :null?>> Male
                                </label>
                                </div>

                             <!-- Female -->
                            <div class="form-check-inline">
                                    <label for="female" class="form-check-label">
                                        <input type="radio" id="female" name="gender" class="form-check-input" value="Female" <?= isset($gender) && $gender === 'Female' ? 'checked' :null?>> Female
                                    </label>
                            </div>
                        </div>
                            <div class="valid-feedback"> <?= $crrGender ?? null ?> </div>
                            <div class="invalid-feedback"> <?= $err["gender"] ?? null ?> </div>
                       
                    </div>
                    
                    <!-- Skills -->
                    <div class="mb-3">
                        <div class="<?= isset($err["skill"]) ? 'is-invalid' :null ?> <?= isset($crrSkill) ? 'is-valid' :null ?>  " >
                            <div class="form-check-inline">
                                <label for="" class="form-check-label">Skills :</label>
                            </div>
                            <!-- HTML -->
                            <div class="form-check-inline">
                                <label for="html" class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="skill[]" id="html" value="HTML" <?= isset($skill) && in_array('HTML', $skill) ? 'checked' :null ?> > HTML 
                                </label>
                            </div>
                            <!-- CSS -->
                            <div class="form-check-inline">
                                <label for="css" class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="skill[]" id="css" value="CSS" <?= isset($skill) && in_array('CSS', $skill) ? 'checked' :null ?> > CSS 
                                </label>
                            </div>
                            <!-- JavaScript -->
                            <div class="form-check-inline">
                                <label for="JavaScript" class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="skill[]" id="javascript" value="JavaScript" <?= isset($skill) && in_array('JavaScript', $skill) ? 'checked' :null ?> > JavaScript 
                                </label>
                            </div>
                             <!-- PHP -->
                            <div class="form-check-inline">
                                <label for="PHP" class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="skill[]" id="PHP" value="PHP" <?= isset($skill) && in_array('PHP', $skill) ? 'checked' :null ?> > PHP
                                </label>
                            </div>
                        </div>
                            <div class="valid-feedback"> <?= $crrSkill ?? null ?> </div>
                            <div class="invalid-feedback"><?= $err["skill"] ?? null ?></div>
                    </div>
                    <br>

                    <!-- Button -->
                    <div>
                        <input type="submit" value="Sign-up" name="sign-456" class="btn btn-primary btn-outline-dark border-0 text-white ">
                    </div>
                    

                </form>
            </div>
      </div>
    </div>



    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>