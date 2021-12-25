<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    max-width: 80%;
    background-color: Red;
    margin: auto;
    padding: 23px;
}


</style>
<body>
    <div class="container">
    <h1>Lets learn about php</h1>
    this is a container
    <?php
     $age = 7;
     if($age>18)
     {
         echo "you can go to the party";
     }
     else if($age == 7)
     {
         echo "you are seven years old";
     }
     else{
         echo "you can not go to the party";
     }
     //array declaration
     $languages = array("Python","PHP","C++","Node.js");
     // $languages[0] , the way to access any element in array;
     echo count($languages);
     //Loops in PHP
     //while-loop
     //do-while loop
     //for loop
     $a = 0;
     while ($a < count($languages)) {
         echo "<br>the value of a is: ";
         echo $languages[$a];
         $a++;
     }
     //for loop
     for ($a=0; $a < 10; $a++) { 
         echo $a;
         echo "<br>";
     }
     //for each loop
     foreach ($languages as $value) {
         echo "<br>";
         echo $value;
     }
     //functions in php
     function print5()
     {
         echo "five";
         echo "<br>";
     }
     print5();
     print5();

    ?>
    
    </div>
</body>
</html>