<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables</title>
</head>
<body>
    <?php 
    // declare(strict_types= 1);
   
    $x = 7;
      $k =  $y = "4";
    $ans = $x + $y + $k;
   echo "<br/>";
    echo  $ans;
    echo "<br/>";
    VAR_DUMP($ans);

    //Understanding global variables in php
   function myTest(){
        global $x;
     return $x = $x + 9;
     
    }

    function myTest(){
        static $x = 0;
        echo $x;
        $x++;
    }
    echo "<br/>";

     myTest();

     echo "<br/>";

     myTest();
     echo "<br/>";
    myTest();
    echo $x;

    echo '<h2>' .$y.'</h2>';

    /*Creating constants in php */
    define("GREETING", 4);
    echo GREETING ."<br/>";
    const awake = "God thank you for everything";
    // awake = 2;
    ?>
</body>
</html>