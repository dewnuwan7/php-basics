<?php 
    $title = "Functions";
    include 'snippets/header.php'
?>
<body>
    <h1><?php echo $title ?></h1>
    <?php 
        //definig a func.
        function writeMessage(){
            echo "You're such a nice person!";
        }

        //calling a function;
        writeMessage();

        //defineing function with parameters
        function addFunction($num1,$num2){
            $num = $num1 + $num2;
            echo ("</br>".$num);

        }
        //passing by Reference
        function changeNum(&$num){
            $num += 10;
        }

        function returnProduct($num1,$num2){
            $prod = $num1*$num2;
            return $prod; //returning the prod value to $returnValue var.
        }
        $num = 500;
        addFunction(2,6);
        addFunction(25,45);

        changeNum($num);
        echo "<br>".$num;
        $returnValue = returnProduct(10,200);
        echo "</br>".$returnValue;
    ?>
  <?php require 'snippets/footer.php'?>