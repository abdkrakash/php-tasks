


<?php

// *******************************************task1**********************************************
$year = 2020;

if ($year % 4 == 0 ) {
    echo "Task1. This year is a leap year <br>";
} else {
    echo "Task1. This year is not a leap year <br>";
}


// *******************************************task2**********************************************
function Season($temperature) {
    if($temperature < 20){
        echo "Task2. We are in winter <br>";
    } else {
        echo "Task2. We are in summer <br>";
    }
}
Season(15);

// *******************************************task3**********************************************

function sum($a, $b) {
    if ($a == $b) {
        echo  "Task3.  " . ($a + $b) * 3 ."<br>"; ;
    } else {
        echo  "Task3.  " . $a + $b   ."<br>"; ;
    }
}
sum(4, 4);



// *******************************************task4**********************************************
function sumOrTriple($a1, $b1) {
    if ($a1+$b1==30) {
        echo " Task4.  True <br>";
    } else {
        echo " Task4. false   <br>";
    }
}
sumOrTriple(13, 17);


// *******************************************task5**********************************************
function MultipleOfThree($number) {
    if ($number % 3 == 0) {
        echo "Task5. True  <br>";
    } else {
        echo "Task5. False  <br>";
    }
}
  MultipleOfThree(9);


// *******************************************task6**********************************************
function isRange($number1) {
    if ($number1 >= 20 && $number1 <= 50) {
        echo " Task6. True <br>";
    } else {
        echo "Task6. False <br>";
    }
  }
     isRange(10);

// *******************************************task7**********************************************
function largest($num1, $num2, $num3) {
    if ($num1 >= $num2 && $num1 >= $num3) {
        echo $num1 . "<br>";
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        echo "Task7. " .$num2 . "<br>";
    } else {
        echo  "Task7. " . $num3 . "<br>";
    }
}
largest(13, 25, 20);


// *******************************************task8**********************************************


function calculateElectricityBill($units) {
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    } elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }

    return  "Task8. " . " Total Electricity Bill: "  .  number_format($bill, 2) . " JOD" . "<br>" ;
}

$units = 300;
echo calculateElectricityBill($units);

// *******************************************task9**********************************************

function calculator($num1, $num2, $operation) {
    switch ($operation) {
        case "add":
            return $num1 + $num2;
        case "subtract":
            return $num1 - $num2;
        case "multiply":
            return $num1 * $num2;
        case "divide":
            if ($num2 == 0) {
                return "Error: Division by zero";
            }
            return $num1 / $num2;
        default:
            return "Invalid operation";
    }
}

$num1 = 10;
$num2 = 5;
$operation = "multiply"; 
echo " Task9.  Result: " .calculator($num1, $num2, $operation) .  "<br>" ;



// *******************************************task10**********************************************

function Vote($x) {
    if ($x >= 18) {
        echo " Task10. You can vote <br>";
        } else {
            echo " Task10. is no eligible to vote" .  "<br>";
            }
}
Vote(19);
// *******************************************task11**********************************************
  
function positivenegative ($number1) {
    if ($number1 > 0) {
        echo 'Task11. Positive <br>';
    } else if ($number1 < 0) {
        echo 'Task11. Negative <br>';
    } else {
       echo 'Task11.  0.00 <br>';
    }
}
positivenegative (21);
// *******************************************task12**********************************************

function calculateGrade($scores) {
    $average = array_sum($scores) / count($scores);

    if ($average >= 90) {
        return "A";
    } elseif ($average >= 80) {
        return "B";
    } elseif ($average >= 70) {
        return "C";
    } elseif ($average >= 60) {
        return "D";
    } else {
        return "F";
    }
}

$scores = [60,  55, 82, 80 , 75 , 90];
echo " Task12. Grade: " . calculateGrade($scores);



?>


<?php echo   "****************************************************************************TASKS-DAY6*******************************************************************************" . "<br>"  ?>


<?php
// *******************************************task1**********************************************

$colors = ["red" => "red", "white" => "white" , "green" => "green"];

$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the"
 . $colors["red"].
 
 "carpet, the" .$colors["green"] .
 "lawn, the " .$colors["white"] .
  "house, the leaden sky. The new president and his first lady. -
Richard M. Nixon";
echo "Task1.  <br> " ;
echo   $paragraph;
echo "<hr>";

// *******************************************task2**********************************************

$colors = array("white", "grren" , "red");

echo " Task2. <ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";
echo "<hr>";

// *******************************************task3**********************************************

$cities = array(
    "Netherlands" => "Amsterdam",
    "Greece" => "Athens",
    "Germany" => "Berlin",
);
arsort($cities);
echo "Task3.  <br> " ;

foreach ($cities as $country =>$captial){
    echo    " the capital of $country is $captial <br>";
}
echo "<hr>";

// *******************************************task4**********************************************

$color = array(4 => "white" , 6 => "green" , 11 => "red");
echo "Task4.  <br> " ;

echo reset($color);
echo "<hr>";

// *******************************************task5**********************************************
echo "Task5.  <br> " ;

$array = array(1 , 2 , 3 , 4 ,5);
$location =3;
$newitem = '$';

array_splice($array ,$location,0, $newitem);
foreach ($array as $value) {
    echo $value;
};
echo "<hr>";

// *******************************************task6**********************************************
echo "Task6.  <br> " ;

$fruits = array(
"c" => "lemon",
"b" => "orange",
"d" => "apple",
"a" => "banana",
);

ksort($fruits);

foreach ($fruits as $key => $value)
{
    echo " $key = $value<br>";
}
echo "<hr>";

// *******************************************task7**********************************************
echo "Task7.  <br> " ;

$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 
                     68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

    $averageTemp = array_sum($temperatures) / count($temperatures);
    echo "Average Temperature is: " . number_format($averageTemp, 1) . "<br>";

    sort($temperatures);

    $lowestTemps = array_slice($temperatures, 0, 5);
    echo "List of five lowest temperatures: " . implode(", ", $lowestTemps) . "<br>";

    $highestTemps = array_slice($temperatures, -5);
    echo "List of five highest temperatures: " . implode(", ", $highestTemps) . "<br>";
    echo "<hr>";

// *******************************************task8**********************************************
echo "Task8.  <br> " ;

    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);    
    $mergedArray = array_merge($array1,$array2);
    print_r($mergedArray);
    echo "<hr>";

// *******************************************task9**********************************************
echo "Task9.  <br> " ;

    function convert($array) {
        echo "Array\n(\n";
        foreach ($array as $item){
            echo strtoupper($item) . "\n";
        }       
        echo ")";
    }
    $colors = array("red", "green", "blue" , "yellow");
    convert($colors);
    echo "<hr>";

// *******************************************task10**********************************************
echo "Task10.  <br> " ;


    function convertu($array) {
        echo "Array\n(\n";
        foreach ($array as $item) {
            echo strtolower($item) . "\n";
        }
        echo ")";
    }

    $colors = array("RED", "BLUE", "WHITE", "YELLOW");

    convertu($colors);
    echo "<hr>";

// *******************************************task11**********************************************
echo "Task11.  <br> " ;

    $words = array("abcd", "abc", "de", "hjjj", "g", "wer");
     $lengths = array_map('strlen', $words);
     $shortest = min($lengths);
     $longest = max($lengths);
     echo "The shortest array length is $shortest. The longest array length is $longest.";
     echo "<hr>";
     
// *******************************************task12**********************************************
echo "Task12.  <br> " ;

     $array1 = array(2, 0, 10, 12, 6);
 
     $filteredArray = array_filter($array1, function($num) {
         return $num > 0;
     });
 
     $smallestNonZero = min($filteredArray);
 
     echo $smallestNonZero;
 



?>