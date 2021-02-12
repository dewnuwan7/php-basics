<?php 
    $title = "If Statements";
    include 'snippets/header.php'
?>
<body>
    <h1><?php echo $title ?></h1>
    <?php
        $grade = 25;
        
        if ($grade>=75){
            echo "You got an A!";
        }
            
        elseif ($grade>=65) {
            echo "You got a B!";
        }


        elseif ($grade>=55) {
            echo "You got a C!";
        }
        elseif ($grade>=35) {
            echo "It's okay. At least you're not failed!";
        }
        else{
            echo "Go home and study bitch!You failed this time too!!!";
        }    
    ?>       
  <?php require 'snippets/footer.php'?>