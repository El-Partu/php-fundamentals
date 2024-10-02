<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strings</title>
</head>
<body>
    <?php
        // Finding the length of the string
        echo strlen("Hello world!");
    
        echo "<br/>";
        //Finding a word at a particular position
        echo strpos("I am a black genius","black");
        // var_dump($myCar);
    
    
        /*  String function */
    
        $v = "Hello world!";
    
        /* Changing string to uppercase and lowercase*/
        echo "<br/>";
        echo strtoupper($v);
        echo "<br/>";
        echo strtolower($v);
        echo "<br/>";
        /*Manipulating srring */
        echo str_replace("world","Grace", $v);
        
        echo "<br/>";
    
        echo strrev($v);
        echo "<br/>";
        /*Converting string to an array */
        $k = explode(" ", $v);
        print_r($k);
        echo "<br/>";
        echo $k[0];
    
        echo "<br/>";
        /* Slicing Strings */
    
        echo substr($v,6,-2);
    
        /*Escape Character */
        echo "I am \"God's\" chosen one \$myname\r!"."<br/>";;
    
    ?>
</body>
</html>