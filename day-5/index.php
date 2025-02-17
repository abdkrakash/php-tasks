


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


