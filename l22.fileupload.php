<?php  
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $alfa = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $sflAlfa = str_shuffle($alfa);
        $randomVal = substr($sflAlfa, 0, 6);
        $randomName = $randomVal.uniqid().date("ahisFdYl");
       $tmpName = $_FILES['img']['tmp_name'];
       $realName = $_FILES['img']['name'];
       if(empty($tmpName)){
        $err['empty'] = "Please select a file";
       }else{
           if(!getimagesize($tmpName)){
            $err['fileType'] = "Please select an image file";
           }else{
               if(!file_exists("./imageUpload")){
                   mkdir("./imageUpload");
               }
               $randomName = $randomName.basename($realName);
               $muf = move_uploaded_file($tmpName, "imageUpload/$randomName");
               if(!$muf){
                   $err['imdUpErr'] = "Image upload problem";
               }
           }
       }
    }
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <button type="submit">Upload image</button>
</form>
<div style="color:red">
    <?php 
     if(isset($err) && count($err) !== 0){
        foreach($err as $e){
            echo $e."<br>";
        }
    }
     ?>
</div>
