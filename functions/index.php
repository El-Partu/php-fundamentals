<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <?php 
    // /*FUNCTIONS*/
    echo "===================FUNCTIONS============= <br>";
    function myMessage(){
        echo "My first php function";
    }

    //when you are not aware of the number of argument the function might take
    function Add(...$num){
        $sum = 0;
        for($i=0; $i < count($num); $i++ ){
            $sum += $num[$i];
        }
        return $sum;
    }

// echo Add(1,2,3,4,5,6)."<br>";
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