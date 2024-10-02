<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // declare(strict_types= 1);
   
    $x = 7;
      $k =  $y = "4";
    $ans = $x + $y + $k;
// echo "<br/>";
//     echo  $ans;
//     echo "<br/>";
//     VAR_DUMP($ans);

   /* function myTest(){
        global $x;
     return $x = $x + 9;
     
    }*/

    // function myTest(){
    //     static $x = 0;
    //     echo $x;
    //     $x++;
    // }
    // echo "<br/>";

    //  myTest();

    //  echo "<br/>";

    //  myTest();
    //  echo "<br/>";
    // myTest();
    // echo $x;

//     echo '<h2>' .$y.'</h2>';

//     class Car{
//         public $model;
//         public $name;
//        public function  __construct($model, $name){
//             $this->model = $model;
//             $this-> name = $name;
//         }

//         public function message(){
//             return "My car is a ".$this->name." ".$this->model."!";
//         }
//     }

//     $myCar = new Car("Black", "Benz");
// //counting number of words in a string
//     echo str_word_count($myCar->message());
//     echo "<br/>";

//     //Finding the length of the string
//     echo strlen($myCar->message());

//     echo "<br/>";
//     //Finding a word at a particular position
//     echo strpos($myCar->message(),"Black");
//     // var_dump($myCar);


//     /*  String function */

//     $v = "Hello world!";

//     /* Changing string to uppercase and lowercase*/
//     echo "<br/>";
//     echo strtoupper($v);
//     echo "<br/>";
//     echo strtolower($v);
//     echo "<br/>";
//     /*Manipulating srring */
//     echo str_replace("world","Grace", $v);
    
//     echo "<br/>";

//     echo strrev($v);
//     echo "<br/>";
//     /*Converting string to an array */
//     $k = explode(" ", $v);
//     print_r($k);
//     echo "<br/>";
//     echo $k[0];

//     echo "<br/>";
//     /* Slicing Strings */

//     echo substr($v,6,-2);

//     /*Escape Character */
//     echo "I am \"God's\" chosen one \$myname\r!"."<br/>";;

//     /*Mathematical functions */
//     echo pi()."<br/>";
//     echo rand(0,20)."<br/>";
//     echo round(1.23343934343, 6)."<br/>";
//     echo abs(-2.4)."<br/>";
//     echo sqrt(4)."<br/>";

//     /*Creating constants in php */
//     define("GREETING", 4);
//     echo GREETING ."<br/>";
//     const awake = "God thank you for everything";
//     // awake = 2;

//     /*CONDITIONALS */
//     //if statement

//     if($x > 10){
//         echo "God is in charge";
//     }else{
//         echo "In all things I give God the glory"."<br/>";
//     }

//     //Switch case
//     switch($x){
//         case 1:
//             case 2:
//                 case 3:
//                     echo "You are part of my family"."<br/>";
//                 break;
//         case  4:
//             echo "Hey! you're still part of my family"."<br/>";
//             break;
//         default:
//         echo "You are not in any of the family"."<br/>";
//     }

//     //Tenary operator
//    echo $x > 3 ?  "Whatever God has said about me shall come to pass":"God is preparing me for something more than I can dream of";

   
// //    <!-- /Loops -->
// //while
// echo "======While loop====== <br/>";
// $i = 1;

// while($i < 10){
//     echo $i."<br/>";
//     $i++;
// }
// echo "======For loop====== <br/>";
// for($i =0; $i<10; $i++ ){
//     echo $i."<br/>";
// }

// echo "<br/> ======Do while loop====== <br/>";

// $h = 1;
// do{
//     echo $h."<br/>";
//     $h++;
// }while($h <10);

// echo "<br/> ======Foreach loop====== <br/>";
// $myArray = array ("Benz", "Lezus", "Toyota");

// $objArray = array("benz"=>"black", "lezus"=>"white", "Toyota"=>"Gray");

// foreach($myArray as $i){
//     echo $i."<br/>";
// }

// foreach($objArray as $x => $y){
//     echo "$x : $y"."<br/>";
// }

// /*FUNCTIONS*/
// echo "===================FUNCTIONS============= <br>";
// function myMessage(){
//     echo "My first php function";
// }

// function Add(...$num){
//     $sum = 0;
//     for($i=0; $i < count($num); $i++ ){
//         $sum += $num[$i];
//     }
//     return $sum;
// }

// echo Add(1,2,3,4,5,6)."<br>";

// echo "===================ARRAYS(CRUD)============= <br>";
// /*ARRAYS (CRUD)*/

// echo "===================CREATION ELEMENT IN ARRAY============= <br>";
// //Creation
// $houses = array("mansion", "storybuilding", "Self contain");
// $cars = ["Benz", "Corola", " Toyota"];
// $carBrand = array("toyota"=>3, "Benz"=>4, "Lezus"=>2);
// $daysOfWeek = ["Monday"=>1, "Tuesday"=>2, "Wednesday"=>3, "Thursday"=>4, "Friday","Saturday"=>6, "Sunday"=>7];
// $scores = [];
// $records =[];
// //Reading

// echo "===================READING ELEMENT IN ARRAY============= <br>";
// echo $houses[0]."<br>";
// echo $carBrand["Benz"]."<br>";

// echo "===================UPDATING ELEMENT IN ARRAY============= <br>";
// FOR($i=0; $i<count($houses); $i++ ){
//     $scores[] = $i*2;
// }
// print_r($scores);
// $records +=["U-Fresh" => "30pieces"];
// print_r($records);

// echo "===================DELETI0N ELEMENT IN ARRAY============= <br>";
// print_r(array_slice($houses, 1,1));

// echo "<br>";
// unset($scores[1]);
// var_dump( $scores);
// echo "<br>";
// unset($carBrand["Monday"], $carBrand["Thursday"]);
// var_dump($carBrand);
// echo "<br>";

// print_r(array_diff($carBrand,[4]));

// array_pop($cars);
// echo "<br>";
// print_r($cars);
// echo "<br>";
// array_shift($cars);
// print_r($cars);
// echo "<br>";
// echo "===================SORTING FUNCTIONS============= <br>";
// array_push($cars,"Ama");
// sort($cars) ;
// print_r($cars);
// echo "<br>";
// rsort($cars);
// print_r($cars);
// echo "<br>";
/* ASSIGNMENT */
function removeDuplicates($s) {
    $stack = [];

    for($i =0; $i < strlen($s);$i++ ){
            if(count($stack) !==0 and $stack[count($stack) -1]=== $s[$i]){
                array_pop($stack);
            }else{
                $stack[] = $s[$i];
            }
        }
        return implode("", $stack);
}
function calPoints($operations) {
    $record = [];
    foreach($operations as $el){
        if (count($record) >0){
            if($el === 'C' ){
                array_pop($record);
                // print_r($record);
                // echo "<br>";
            }else if($el === "D"){
                $record[] = (int)$record[count($record)-1]*2;
                // print_r($record);
                // echo "<br>";
            }else if($el === "+"){
                $record[] = (int)$record[count($record) -2] + (int)$record[count($record) -1];
                // print_r($record);
                // echo "<br>";
                
            }else{
                $record[] = (int)$el;
                // print_r($record);
                // echo "<br>";
                }
            }
            else{
                $record[] = (int)$el;
                // print_r($record);
                // echo "<br>";
            }
        }
            
// print_r($record);
        $sum = 0;
        foreach($record as $el){
            $sum += $el;
            
        }
        return $sum;
    }

    // echo calPoints(["5","2","C","D","+"]
    // )
    function leftRightDifference($nums) {
        $leftSum = [0];
        $rightSum = [0];
        $len_num = count($nums);
        $answer = [];
    for($i = 0;$i < $len_num ; $i++){
            $leftSum[] = $nums[$i] + $nums[$i - 1];
            $rightSum[] = $nums[$len_num - $i] + $nums[$len_num - ($i + 1)];
    }
    print_r($leftSum);
    print_r($rightSum);
for($i = 0;$i < $len_num ; $i++){
    $answer[] = abs($leftSum[$i] - $rightSum[$len_num -($i + 1)]);
}

return $answer;
    }
    // leftRightDifference([10,4,8,3]);
//  echo removeDuplicates("abbaca");

function corpFlightBookings($bookings, $n) {
    $answer = array_fill(0, $n, 0);
    for($i = 0; $i<count($bookings); $i++){
        $first = $bookings[$i][0];
        echo $first."<br>";
        $last = $bookings[$i][1] + 1;
        echo $last."<br>";
        $reserved = $bookings[$i][2];
        for($k = $first; $k < $last; $k++){
            $answer[$k -1] += $reserved;
            print_r($answer);
        }
    }
    return $answer;
}
// corpFlightBookings([[1,2,10],[2,3,20],[2,5,25]], 5);
function reverseString(&$s) {
    $output = [];
    for($i = 1; $i < count($s); $i++){
        $output[]=$s[count($s) - $i];
    }
    $output[]=$s[0];
    $s = $output;
    return $s;
}

function moveZeroes(&$nums) {
    $non_zero = [];
    $zero = [];

    foreach($nums as $el){
        if($el !== 0){
            $non_zero[] = $el;
            echo "<br>";
            print_r($non_zero);
        }else{
            echo "<br>";
            $zero[] = $el;
            print_r($zero);
        }
    }
    $nums[] = $non_zero + $zero;
    print_r($nums);
    return $nums;
}

// $nums = [0,1,0,3,12];
// moveZeroes($nums);
function productExceptSelf($nums) {
    $output = [];
    $product = 1;
    $right = $left = $i = 0;
    $num_element = count($nums);
    while($i < $num_element){
        if($i === $num_element){
            break;
        }

        if($right === 0){
            $right = $i + 1; 
            $left = $i - 1;
        }
        
        echo"<br>";
        echo "I am left index==========  ".$left;
        echo"<br>";
        echo "I am right index=========   ".$right;
        echo"<br>";
        echo"<br>";
        if($left >= 0){
            $product =$product * $nums[$left];
            $left -= 1;
        }

        if($right < $num_element){
            $product = $product * $nums[$right];
            $right +=1;
        }

        echo"The product ".$product;
        if($right === $num_element  && $left < 0){
            $output[] = $product;
            $i += 1 ;
            $left = $i -1;
            $right = $i + 1;
        }
        echo "I am counter============       ".$i;
        echo"<br>";
        print_r($output);
    }
    return $output;

}

function merge(&$nums1, $m, $nums2, $n) {
        
    if($n === 0){
        return $nums1;
    }
    else if($m === 0){
        return $nums1 = $nums2;
    }
    else{
        $k = 0;
        for($i = 0; $i < count($nums1); $i++){
            if($m < count($nums1)){
                if($nums1[$i] > $nums2[$k]){
                    echo "Output value of m  === ";
                    $nums1[$m] = $nums1[$i];
                    var_dump($nums1[$m]);
                    echo "<br>";
                    $nums1[$i] = $nums2[$k];
                    echo "<br>";
                    echo "Array at index  $i === ";
                    print_r($nums1);
                    echo "<br>";
                    $m += 1; 
                    $k += 1;
                }
                else {
                    echo "<br>";
                    $nums1[$m] = $nums2[$k];
                    echo "Array at index  $i === ";
                    print_r($nums1);
                    echo "<br>";
                    $m += 1;
                    $k += 1;
                }
            }
        }
    }
    return $nums1;
}

function create_sum_prefix($arr){
    for($i = 1; $i < count($arr); $i ++){
        $arr[$i] = $arr[$i] + $arr[$i - 1] ;
    }
    return $arr;
}

$num = [1,2,3,4,5,6];
// print_r(create_sum_prefix($num));

    ?>
</body>
</html>