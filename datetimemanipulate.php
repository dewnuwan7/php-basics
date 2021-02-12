<?php 
    $title = "Date & Time";
    include 'snippets/header.php'
?>
<body>
    <h1><?php echo $title ?></h1>
    <?php
        $currentDate = getdate();
        $currentTime = gettimeofday();
        echo "<p>Today is ".$currentDate['mday']." of ".$currentDate['month']." in ".$currentDate['year']."</p></br>";
        
        print date("m/d/y G.i:s<br>",time())."</br>";
        print date("j of  Y, \a\\t g.i a",time())."<br>";
    ?>
  <?php require 'snippets/footer.php'?>