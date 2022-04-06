<?php 
    //indexed array
    $person = array("Sadik Saad", 25, true, "Dhaka");
    echo $person[3]."<br>";
    echo "<pre>";
    print_r($person);
    echo "</pre>";

    $insittute = ["Daffodil", "Dhaka", "Bangladesh"];
    echo $insittute[2]."<br>";
    echo "<pre>";
    print_r($insittute);
    echo "</pre>";
    
    echo count($insittute)."<br>";

    for ($i=0; $i < count($insittute); $i++) { 
        echo $insittute[$i]." ";
    }
    echo "<br>";

    foreach ($insittute as $int) {
        echo $int." ";
    }
    echo "<br>";
    // associative array
    $student = ["name"=>"Amit Gosh", "age"=>25, "area"=>"Dhaka"];
    echo $student["name"];
    echo "<pre>";
    print_r($student);
    echo "</pre>";
    echo count($student)."<br>";
    foreach ($student as $inName => $stdData) {
        echo ucfirst($inName)." : ".$stdData."<br>";
    }

    // multidimentional array
    $students = [
        ["Amit", "Dhaka", "Male", 25],
        ["Turzo", "Dhaka", "Male", 25],
        ["Abuzar", "Dhaka", "Male", 24]
    ];
    echo $students[2][0];
    echo "<pre>";
    print_r($students);
    echo "</pre>";

    for ($i=0; $i < count($students); $i++) { 
        for ($j=0; $j < count($students[$i]); $j++) { 
           echo $students[$i][$j]." ";
        }
        echo "<br>";
    }

    foreach($students as $student){
        foreach($student as $std){
            echo $std." ";
        }
        echo "<br>";
    }

    $persons = [
        ["name"=>"Akbar", "age"=>"69", "city"=>"Dhaka"],
        ["name"=>"Asif", "age"=>"36", "city"=>"Dhaka"],
    ];
    echo $persons[1]["name"];
    echo "<pre>";
    print_r($persons);
    echo "</pre>";

    for ($i=0; $i < count($persons); $i++) { 
        foreach($persons[$i] as $person){
            echo $person." ";
        }
        echo "<br>";
    }

    foreach ($persons as $proson) { 
        foreach($proson as $person){
            echo $person." ";
        }
        echo "<br>";
    }

    $employees = [
        "names" => ["Kamal", "Jamal", "Tomal", "Akmal", "Mal", "Amit"],
        "ages" => [35, 25, 45, 40, 75, 25],
        "designations" => ["CEO", "Director", "Manager", "Executive", "Owner", "Student"]
    ];

    foreach ($employees as $kachaBadam => $employee){
        foreach($employee as $data){
            echo ucfirst(substr($kachaBadam, 0, -1))." : ".$data." ";
        }
        echo "<br>";
    }

    $totalData = count($employees);
    $x = 0;
    for ($j=0; $j < count($employees["names"]); $j++) { 
        $y = 1;
        foreach ($employees as $kachaBadam => $employee){
            for ($i = $x; $i < $x+1; $i++){
                $coma = ($y < $totalData)?", ": null;
                echo ucfirst(substr($kachaBadam, 0, -1))." : ".$employee[$i].$coma;
            }
            $y++;
        }
        echo "<br>";
        $x++;
    }
?>