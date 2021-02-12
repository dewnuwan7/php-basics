<?php 
    $title = "For Loop";
    include 'snippets/header.php'
?>
<body>
    <h1><?php echo $title ?></h1>
    <?php
        for ($count = 0; $count <10; $count++){
            echo "<p>Hello World $count</p>";
            
        }   
        for($count = 0; $count <10; $count++){
            echo "<p>$count</P>";
        }
    ?>
  <?php require 'snippets/footer.php'?>