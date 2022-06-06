<?php 
    $crrFile = basename($_SERVER["PHP_SELF"]);
    $age = $_GET['age'] ?? header("location: $crrFile?age=45");
    if ($age < 30) { 
?>
    <h2>Welcome to our website because you are <?=  $age ?> years old</h2>
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod consequuntur ea nobis odit officiis error soluta, iure similique ducimus labore dolores eius molestias perspiciatis rem mollitia voluptate magnam facilis aperiam asperiores! Enim eligendi quaerat illum recusandae, eaque fugiat iste repellendus, quisquam et molestias provident, maiores voluptatem. Esse iste itaque debitis.
    </p>
    <button>Read More</button>
    <?php }else{ ?>
    <h2>Sorry! you are not allowed here! because you are <?=  $age ?> years old</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas nemo provident cum iure debitis, animi unde nisi sunt consequatur, praesentium possimus vel similique maxime iusto, aspernatur consequuntur alias dolore laboriosam at molestias sint. Corporis ea, a autem inventore quia consequatur excepturi eius tempora libero? Aperiam quae veritatis sit nihil doloribus!
    </p>
    <button>Why! Read More</button>
    <?php } ?>
    <br><br>
    <a href="<?= "$crrFile?age=15" ?>">
        <button>Age 15</button>
    </a>
    <a href="<?= "$crrFile?age=25" ?>">
        <button>Age 25</button>
    </a>
    <a href="<?= "$crrFile?age=35" ?>">
        <button>Age 35</button>
    </a>