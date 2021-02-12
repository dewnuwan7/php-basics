<?php 
    $title = "Arrays";
    include 'snippets/header.php'
?>
<body>
    <h1><?php echo $title ?></h1>
    <?php
        //a variable
        $num = 2;

        //an array
        //only one data type
        $numbers = array(20,60,6,50,70,10,20,10,102,10,0,10,21,22);
        echo $numbers[2]; //access the value by indexing *just like in Python :-)

        echo "<p>Array has ".count($numbers)." values</p>";

        for ($count = 0; $count < count($numbers);$count++){
            echo "<p>$numbers[$count]</p>";
        }
        
    ?>
  <?php require 'snippets/footer.php'?>