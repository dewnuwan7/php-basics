<?php 
    $title = "While Loop";
    include 'snippets/header.php'
?>
<body>

    <h1><?php echo $title ?></h1>
    <?php
        $grade = 0;
        while($grade<10){ //Pre Condition Loop
            echo "<p>hello</p>";
            $grade++;   //$grade = $grade + 1; 
        }
    ?>

    <h1>Do While Loop</h1>
    <?php
        
        $grade = 0;
        do{//post condition loop.
            echo "<p>This is doing something!</p>";
            $grade++;
        }while($grade<20);
    ?>

<?php require 'snippets/footer.php'?>