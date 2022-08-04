<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        this is my first php website
        <?php
        define('PI', 3.14);
            echo "Hello World";
            echo "<br/>";
            $variable1 = 22;
            $variable2 = 22;
            echo " Addition ", $variable1 + $variable2;
            echo "<br/>";
            echo " Subtraction ", $variable1 - $variable2;
            echo "<br/>";
            echo " Multiplication ", $variable1 * $variable2;
            echo "<br/>"; 
            echo " Division ", $variable1 / $variable2;

            echo var_dump($variable1==23);
            echo PI;
        ?>
    </div>
</body>
</html>
