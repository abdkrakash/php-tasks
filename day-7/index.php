
<?php  
// Q1:
echo "Q1:" ;
echo "<br>";

function swap(&$a, &$b) {
    $temp = $a; 
    $a = $b;
    $b = $temp;
}
$x = 12;
$y = 10;
swap($x, $y); 
echo "x = $x, y = $y" ; 
echo "<hr>";

// Q2:
echo "Q2:" ;
echo "<br>";

function isArmstrong($num) {
    $sum = 0;
    $temp = $num;

    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += $digit ** 3;
        $temp = (int)($temp / 10);
    }

    return $sum === $num;
}
$number = 407;
if (isArmstrong($number)) {
    echo   " $number is an Armstrong number ";
} else {
    echo   "$number is not an Armstrong number ";
}
echo "<hr>"; 


// Q3:
echo "Q3:" ;
echo "<br>";

function isPalindrome($str) {
    $str = mb_strtolower($str, 'UTF-8');
    $str = preg_replace("/[^a-z0-9]/", "", $str);
    return $str === strrev($str);
}
$input = "Name no one man	";
if (isPalindrome($input)) {
    echo " Yes, it is a palindrome ";
} else {
    echo "  No, it is not a palindrome ";
} 
echo "<hr>";

// Q4:
echo "Q4:" ;
echo "<br>";

function removeDuplicates($array) {
    $array = array_unique($array);
    
    return array_values($array);
}
$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = removeDuplicates($array1);
print_r($array1);
 echo "<hr>";

// Q5:
echo "Q5:" ;
echo "<br>";

function reverseString($str) {
    return strrev($str);
}
$input = "remove";
$output = reverseString($input);
echo $output;
echo "<hr>";

// Q6:
echo "Q6:" ;
echo "<br>";

function isLowerCase($str) {
    return $str === strtolower($str);
}
$input = "remove";
if (isLowerCase($input)) {
    echo "Your String is Ok ";
} else {
    echo "Your String contains uppercase letters ";
}
echo "<hr>";


// Q7:
echo "Q7:" ;
echo "<br>";

function convertString($str) {
    echo "Original String: " . $str . "<br>";
    echo "Uppercase: " . strtoupper($str) . "<br>";
    echo "Lowercase: " . strtolower($str) . "<br>";
    echo "First letter uppercase: " . ucfirst(strtolower($str))."ucfirst". "<br>";
    echo "Each word capitalized: " . ucwords(strtolower($str)) . "ucwords". "<br>";
}
$input = "hello world, php is amazing!";
convertString($input);
echo "<hr>";


// Q8:
echo "Q8:" ;
echo "<br>";

function formatTime($timeStr) {
    $hours = substr($timeStr, 0, 2);
    $minutes = substr($timeStr, 2, 2);
    $seconds = substr($timeStr, 4, 2);

    return "$hours:$minutes:$seconds";
}
$input = "085119";
$output = formatTime($input);
echo $output;
echo "<br>";

// Q8:
echo "Q8:" ;
echo "<br>";
 $Time =array(
"s"=>"08",
"m"=>"51",
"h"=>"19",
 );
        echo implode(":", $Time) . "<br>";
        echo "<hr>";

// Q9:
echo "Q9:" ;
echo "<br>";

function checkWordInSentence($sentence, $word) {
    $sentence = strtolower($sentence);
    $word = strtolower($word);
    if (strpos($sentence, $word) !== false) {
        echo "Word Found!";
    } else {
        echo "Word Not Found!";
    }
}
$sentence = "I am a full stack developer at Orange Coding Academy";
$word = "FULL" ;
checkWordInSentence($sentence, $word);
echo "<hr>";

// Q10:
echo "Q10:" ;
echo "<br>";

function getFileNameFromURL($url) {
    return basename($url);
}
$url = "www.orange.com/index.php";
echo getFileNameFromURL($url);
echo "<hr>";

// Q11:
echo "Q11:" ;
echo "<br>";

function findFirstDifference($str1, $str2) {
    $length = min(strlen($str1), strlen($str2));
    for ($i = 0; $i < $length; $i++) {
        if ($str1[$i] !== $str2[$i]) {
            echo "First difference between two strings at position $i: \"" . $str1[$i] . "\" vs \"" . $str2[$i] . "\"";
            return;
        }
    }
    echo "No differences found within the common length!";
}
$string1 = "dragonball";
$string2 = "dragonball";
findFirstDifference($string1, $string2);
echo "<hr>";

// Q12:
echo "Q12:" ;
echo "<br>";

function getNextLetter($char) {
    if ($char === 'z') {
        return 'a';
    }
    return chr(ord($char) + 1);
}
$input1 = 'a';
$input2 = 'z';
echo "Next letter after '$input1': " . getNextLetter($input1) . "<br>";
echo "Next letter after '$input2': " . getNextLetter($input2);
echo "<hr>";

// Q13:
echo "Q13:" ;
echo "<br>";

function removeLeadingZeros($number) {
    return ltrim($number, '0');
}

$original = '0000657022.24';
$result = removeLeadingZeros($original);

echo "Processed Number: $result";
echo "<hr>";

// Q14:
echo "Q14:" ;
echo "<br>";

function removeSpecialChars($string) {
    return preg_replace('/[^0-9\s]/', '', $string);
}
$input = '\"\1+2/3*2:2-3/4*3';
$output = removeSpecialChars($input);
echo "Processed String: $output";


echo "<hr>";

// Q15:
echo "Q15:" ;
echo "<br>";
function getFirstWords($sentence, $wordCount = 5) {
    $words = explode(' ', $sentence);
    $firstWords = array_slice($words, 0, $wordCount);
    return implode(' ', $firstWords);
}
$input = "The quick brown fox jumps over the lazy dog";
$output = getFirstWords($input);
echo "Processed Sentence: $output";


?>