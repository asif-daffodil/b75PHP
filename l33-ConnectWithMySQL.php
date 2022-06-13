<?php  
    $conn = mysqli_connect("localhost", "root", "", "b75");
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $name = $_POST['name'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $father = $_POST['father'];
        $mother = $_POST['mother'];

        $conn->query("INSERT INTO `students`(`name`, `city`, `gender`, `father`, `mother`) VALUES ('$name', '$city', '$gender', '$father', '$mother')");
    }

    /* if(!$conn){
        echo "Something went wrong";
    }else{
        echo "Database connected successfully";
    } */

    /* echo "<pre>";
    print_r($conn);
    echo "</pre>"; */


    // $convertedData = $selectData->fetch_all();
    // $convertedData = $selectData->fetch_object();
    /* echo "<pre>";
    print_r($convertedData);
    echo "</pre>"; */
?>
<div style="display: grid; grid-template-columns: 1fr 1fr; grid-gap: 8px">
    <div>
    <form action="" method="post">
    <input type="text" placeholder="Name" name="name"><br /><br />
    <input type="text" placeholder="City" name="city"><br /><br />
    <input type="text" placeholder="Gender" name="gender"><br /><br />
    <input type="text" placeholder="Father" name="father"><br /><br />
    <input type="text" placeholder="Mother" name="mother"><br /><br />
    <input type="submit">
</form>
</div>

<div>
    <?php 
    $selectQuery = "SELECT * FROM `students`";
    $selectData = $conn->query($selectQuery);
    
    while($obj = $selectData->fetch_object()){
        echo "Name :".$obj->name."<br />City :".$obj->city."<br />Gender :".$obj->gender."<br /><br />";
    }
?>
</div>
</div>

