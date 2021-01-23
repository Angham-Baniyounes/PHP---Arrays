<?php
//Q1. 
$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that
moment: the <span style='color: $color[2]'> $color[2] </span>carpet, the <span style='color: $color[1]'> $color[1] </span> lawn, the <span style='color: $color[0]; background-color: #000'> $color[0] </span> house, the leaden sky. The
new president and his first lady. - Richard M. Nixon";
echo "<br><hr>";

//Q2: Write a PHP script that will display the colors in order => white, green, red, ● green ● red ● white
$colors = array ('white', 'green', 'red');
foreach($colors as $co) {
    echo "$co, ";
}
sort($colors);
echo "<ul>";
foreach($colors as $i) {
    echo "<li> $i </li>";
}
echo "</ul> <hr>";

//Q3: Create a PHP script which displays the capital and country name from the array $cities. Sort the list by the capital of the country.
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United",
"Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech",
"Republic"=>"Prague", "Estonia"=>"Tallinn", "Hungary"=>"Budapest") ;
asort($cities);
foreach($cities as $c => $c_value) {
    echo "The capital of $c is $c_value"."<br>";
}
echo "<hr>";

//Q4. from the PHP array. After deleting the element, integer keys must be normalized.
$x = array(1, 2, 3, 4, 5);
var_dump($x);
echo "<br>";
unset($x[3]);
$x1 = array_values($x);
var_dump($x1);
echo "<hr>";

//Q5.Write a PHP script to get the first element of the above array. => $color = array(4 => 'white', 6 => 'green', 11=> 'red'); Expected result : white
$Color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo array_values($Color)[0];
echo "<hr>";

//Q6. Write a PHP script that inserts a new item in an array in any position.
// Expected Output : Original array : 1 2 3 4 5 => After inserting '$' the array is : 1 2 3 $ 4 5
function addItem($arr, $pos, $item) {
    echo " Original array";
    foreach($arr as $r) {
        echo "$r ";
    }
    echo "<br>";
    array_splice($arr, $pos, 0, $item);
    echo "After inserting $item the array is :";
    foreach($arr as $r1) {
        echo "$r1 ";
    }
}
$org = array( '1','2','3','4','5' );
addItem($org, 3, '$');
echo "<hr>";

//Q7. Write a PHP script to sort the following associative array 
$asArr = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
//a: ascending order sort by value
asort($asArr);
foreach($asArr as $a => $a_value) {
    echo " $a : $a_value <br>";
}
echo "<br>";
//b: ascending order sort by Key
ksort($asArr);
foreach($asArr as $a => $a_value) {
    echo " $a : $a_value <br>";
}
echo "<br>";
//c: descending order sorting by Value
arsort($asArr);
foreach($asArr as $a => $a_value) {
    echo " $a : $a_value <br>";
}
echo "<br>";
//d: descending order sorting by Key
krsort($asArr);
foreach($asArr as $a => $a_value) {
    echo " $a :  $a_value  <br>";
}
echo "<hr>";

//Q8. 9. Write a PHP script to calculate and display average temperature, seven lowest and highest temperatures
$recTemp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$count = 0;
$sum = 0;
for($i = 0; $i < count($recTemp); $i++) {
    $sum += $recTemp[$i];
    $count += 1;
}
echo "avg = ".($sum / $count);
echo "<br>";
sort($recTemp);
foreach($recTemp as $r) {
    echo "$r ,";
}
echo "<br>";
//List of seven lowest temperatures 
for($i = 0; $i < 7; $i++) {
    echo "$recTemp[$i] ,";
}
echo "<br>";
// List of seven highest temperatures
for($i = count($recTemp) - 1; $i >= count($recTemp) - 7; $i--) {
    echo "$recTemp[$i] ,";
}
echo "<hr>";

//Q9. Write a PHP program to merge the following two arrays.
$array1 = array(array(70,40), array(25, 45));
$array2 = array("example", "com");
function mergeArrs($arr1, $arr2) {
    $tempArr = array();
    $tempArr[] = $arr1;
    if(is_scalar($arr2)) {
        $tempArr[] = $arr2;
    } else {
        foreach($arr2 as $a => $a_value) {
            $tempArr[] = $a_value;
        }
    }
    return $tempArr;
}
echo "<pre>";
print_r(array_map('mergeArrs', $array1, $array2));
echo "</pre>";
echo "<hr>";

//Q10. Write a PHP function to change the following array's all values to upper or lower case.
$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
function changeCase($arr, $case) {
    foreach($arr as $a => $a_value) {
        if($case == CASE_UPPER) {
            $arr[$a] = strtoupper($a_value);
        } elseif($case == CASE_LOWER) {
            $arr[$a] = strtolower($a_value);
        }
    }
    print_r($arr);
}
changeCase($color, CASE_UPPER);
echo "<br>";
changeCase($color, CASE_LOWER);
echo "<hr>";

//Q11. Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.
for($i = 200; $i <= 250; $i+=4) {
    echo "$i ,";
}
echo "<hr>";

//Q12. Write a PHP script to get the shortest/longest string length from an array.
function getStr($arr) {
    $short = min(array_map('strlen', $arr));
    $long = max(array_map('strlen', $arr));
    echo "The shortest array length is $short. The longest array length is $long.";
}
$str = array("abcd","abc","de","hjjj","g","wer");
getStr($str);
echo "<hr>";

//Q13. Write a PHP script to generate unique random numbers within a range. Sample Range : (11, 20)
$r = range(11, 20);
shuffle($r);
for($i = 0; $i < count($r); $i++) {
    echo "$r[$i] ";
}
echo "<hr>";

//Q14. Write a PHP script to get the largest key in the array.
function maxKey($arr) {
    $maxk = max(array_keys($arr));
    echo "The largest key in the array : $maxk";
}
maxKey($color);
echo "<hr>";

//Q15. Write a PHP function that returns the lowest integer in the array that is not 0.
function lowInt($arr) {
    $minV = 0;
    for($i = 0; $i < count($arr); $i++) {
        if($i > 0) {
            if($minV > $arr[$i]) {
                $minV = $arr[$i];
            }
        }
        $minV = $arr[$i];
    }
    return $minV;
}
$m = array(1,0,1,12,1);
lowInt($m);
echo "<hr>";

//16. Write a PHP function that returns the lowest integer in the array that is not 0.
$nums = array('2','4','8','5','0', '-1' ,'1','7','16','9','10','3');
function lowestInt($arr) {
    for($j = 0; $j < count($arr); $j ++) {
        for($i = 0; $i < count($arr)-1; $i ++){
            if($arr[$i] > $arr[$i+1]) {
                $temp = $arr[$i+1];
                $arr[$i+1]=$arr[$i];
                $arr[$i]=$temp;
            }       
        }
    }
    foreach($arr as $r => $r_value) {
        if($r == 0 && $r_value != 0) {
            echo $r_value;
        }
    }
    echo "<br>";
}
lowestInt($nums);
echo "<hr>";
// 17. Write a PHP function to floor decimal numbers with precision.
// Note: Accept three parameters number, precision, and $separator
// Sample Data : // 1.155, 2, "." // 100.25781, 4, "." // -2.9636, 3, "."
// Expected Output : // 1.15 // 100.2578 // -2.964
function floorNum($num, $pre, $sep) {
    $n = explode($sep, $num);
    $n[1] = substr_replace($n[1], $sep, $pre ,0);
    // echo $n[0]."<br>".$n[1]."<hr>";
    if($n[0] >= 0) {
        $n[1] = floor($n[1]);
    } else {
        $n[1] = ceil($n[1]);
    }
    $newNum= array($n[0], $n[1]);
    return implode($sep, $newNum);
    echo "<br>";
}
print_r(floorNum(1.155, 2, "."));
echo "<hr>";

// 18. Write a PHP script to print "second" and Red from the following array.
// Sample Data :
$color = array ( 
            "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
            "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
            "holes" => array ( "First", 5 => "Second", "Third")
            );


// 19. Write a PHP function to sort an array according to another array acting as a priority list.



// 20. Write a PHP script to sort an array using case-insensitive natural ordering.
$names  = array('Angham', 'nagham', 'Nghm', 'music', 'Moledy');
function insenArray($arr) {
    natcasesort($arr);
    foreach($arr as $r => $r_value) {
        echo $r_value."\t,";
    }
}
insenArray($names);
?>