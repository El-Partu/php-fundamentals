<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
</head>
<body>
    <?php
       
    //    <!-- /Loops -->
    //while
    echo "======While loop====== <br/>";
    $i = 1;

    while($i < 10){
        echo $i."<br/>";
        $i++;
    }
    echo "======For loop====== <br/>";
    for($i =0; $i<10; $i++ ){
        echo $i."<br/>";
    }

    echo "<br/> ======Do while loop====== <br/>";

    $h = 1;
    do{
        echo $h."<br/>";
        $h++;
    }while($h <10);

    echo "<br/> ======Foreach loop====== <br/>";
    $myArray = array ("Benz", "Lezus", "Toyota");

    $objArray = array("benz"=>"black", "lezus"=>"white", "Toyota"=>"Gray");

    foreach($myArray as $i){
        echo $i."<br/>";
    }

    foreach($objArray as $x => $y){
        echo "$x : $y"."<br/>";
    }
    ?>
</body>
</html>