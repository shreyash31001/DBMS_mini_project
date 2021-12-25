<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP website</title>
</head>
<body>
    <div class="container">
    This is my first php website
    <?php
    define('PI',3.14);
        echo " hello world and this is printed using php";

        //secret algorithm
        // single line comment
        /*
         this is 
         a multiline comment
        */
        $variable = 34;  // Php is a dynamically typed language, you do not have to specify the 
        // the varibale's data type.
        $variable2 = 45;
        echo $variable;
        echo $variable2;
        //Operators in php
       // echo $variable + $variable2; // plus operation
        echo "<br>"; //new line
        $newVar = 5;
        //$newVar++;
        $newVar += $variable;
        //echo $newVar;
        //comparison operators
        echo "the value is";
        echo var_dump(1==4);
        // logical operators
        $myVar = (true) xor (true);
        echo "<br>";
        echo var_dump($myVar);

    ?>
     <?php
     // Php is not a case sensitive language
        //Data types in php
        /* 1 String
           2 Integer
           3 Float
           4 Boolean
           5 Array
           6 Object
        */
        $var = "This is a string";
        echo var_dump($var);
        echo "<br>";
        echo PI;

    ?>


    </div>
</body>
</html>
