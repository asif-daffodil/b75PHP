<?php
    $crrFile = basename($_SERVER["PHP_SELF"]);
    $age = $_GET['age'] ?? header("location: $crrFile?age=45");
    if ($age < 30) {
?>
    <h2>Welcome to our Website because you are <?= $age ?> years old</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores pariatur saepe quisquam qui natus vitae modi accusantium enim dolor eum est, et necessitatibus impedit ipsam ipsa deserunt beatae iste distinctio temporibus! Minima voluptates perferendis excepturi labore! Omnis harum delectus vero, sint facilis porro, maxime eaque exercitationem consequuntur temporibus atque sequi?
    </p>
    <button>Read More</button>
<?php }else{ ?>
    <h2>Sorry! you are not allowed here! because you are <?= $age ?> years old</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quam alias quos officia libero recusandae error minima tempora, rem inventore possimus cupiditate laudantium! Ex placeat officia nostrum accusamus error, iusto ratione repellendus libero dolore dolorum incidunt repellat itaque dignissimos enim!
    </p>
    <button>Why? Read More</button>
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