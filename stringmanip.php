<?php 
    $title = "String Manipulation";
    include 'snippets/header.php'
?>
<body>
    <h1><?php echo $title ?></h1>
    <?php
        //Concatenation of strings
        $pharse1 = "students who came late\n";
        $pharse2 = "\nin class, stand with rocks";
        $combine = $pharse1.$pharse2;
        echo $pharse1.",named Tiffiny ".$pharse2;
        echo "<br>";
        echo "<hr>";
        //string transformation
        $name = "dewnuwan jayaweera";
        echo "<br>Upperacase first letter: ".ucfirst($name);
        echo "<br>Upperacase first letter of each word: ".ucwords($name);
        echo "<br>Uppercase all letter: ".strtoupper($name);
        echo "<br><br>Lowercase all letter: ".strtolower("THIS WAS ALL UPPERCASE!");
        echo "<hr>";
        echo "<p>Repeat String: ".strtoupper(str_repeat('a',10))."</p>";
        echo "<p>Get a Sub String: ".substr($name,5,10)."</p>";
        echo "<p>Get Position of a String: ".strpos($name,'a')."</p>";

        echo "<hr>";
        echo "<p>Find character R: ".strchr($name,'d')."</p>";
        echo "<p>Find character W: ".strchr($name,'w')."</p>";
        echo "<p>Find character N: ".strchr($name,'n')."</p>";
        echo "<p>Find character A: ".strchr($name,'a')."</p>";

        echo "<hr>";
        echo "<p>Find length of a string: ".strlen($name)."</p>";
        echo "Without Trim: "."A"."B C D"."E";
        echo "Trim spaces on both sides: "."A".trim("B C D")."E"."</br>";
        echo "Trim spaces on left side: "."A".ltrim("B C D")."E"."</br>";
        echo "Trim spaces on right side: "."A".rtrim("B C D")."E"."</br>";
        echo "Replace a string with another string: ".str_replace("stand","sit",$combine);


    ?>    
  <?php require 'snippets/footer.php'?>