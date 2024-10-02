<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
echo "===================ARRAYS(CRUD)============= <br>";
/*ARRAYS (CRUD)*/

echo "===================CREATION ELEMENT IN ARRAY============= <br>";
//Creation
$houses = array("mansion", "storybuilding", "Self contain");
$cars = ["Benz", "Corola", " Toyota"];
$carBrand = array("toyota"=>3, "Benz"=>4, "Lezus"=>2);
$daysOfWeek = ["Monday"=>1, "Tuesday"=>2, "Wednesday"=>3, "Thursday"=>4, "Friday","Saturday"=>6, "Sunday"=>7];
$scores = [];
$records =[];
//Reading

echo "===================READING ELEMENT IN ARRAY============= <br>";
echo $houses[0]."<br>";//indexed array
echo $carBrand["Benz"]."<br>";//Associate array

echo "===================UPDATING ELEMENT IN ARRAY============= <br>";
FOR($i=0; $i<count($houses); $i++ ){
    $scores[] = $i*2;//appending in php
}
print_r($scores);
$records +=["U-Fresh" => "30pieces"];
print_r($records);

echo "===================DELETI0N ELEMENT IN ARRAY============= <br>";
print_r(array_slice($houses, 1,1));

echo "<br>";
unset($scores[1]);
var_dump( $scores);
echo "<br>";
unset($carBrand["Monday"], $carBrand["Thursday"]);
var_dump($carBrand);
echo "<br>";

print_r(array_diff($carBrand,[4]));

array_pop($cars);
echo "<br>";
print_r($cars);
echo "<br>";
array_shift($cars);
print_r($cars);
echo "<br>";
echo "===================SORTING FUNCTIONS FOR ARRAYS============= <br>";
array_push($cars,"Ama");
sort($cars) ;
print_r($cars);
echo "<br>";
rsort($cars);
print_r($cars);
echo "<br>";
/* ASSIGNMENT */


    ?>
</body>
</html>