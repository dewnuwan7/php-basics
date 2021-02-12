<?php 
    $title = "Switch Statement";
    include 'snippets/header.php'
?>
<body>
    <h1><?php echo $title ?></h1>
    <?php
        $grade = 'F';
        switch ($grade) { //this is similar to nested statements in Python
            case 'A':
                echo "Congrats!You got an A!";
                break;
            
            case 'B':
                echo "Cool! You got a B!";
                break;
            case 'C':
                echo "Okay.. You're good!";
            break;
            case 'S':
                echo "Hmmm...Okay Okay. Try better next time!";
            break;
    
            default:    //default stands for else
                echo "You're a dumb!";
                break;

        }
    ?>

<?php require 'snippets/footer.php'?>