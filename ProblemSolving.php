<?php
// $a = readline('');//read line from the input(keyboard)
// echo "Hello, ".$a;
// /********************/
// fscanf (resource $handle, string $format, mixed &$var1 [, mixed &$... ] ) : mixed
// "fscanf" that allows you to read input from a file according to a specified format.
// $file = fopen("data.txt", "r"); // Open the file in read mode

// if ($file) {
//     // Read data from the file using fscanf
//     fscanf($file, "%s %d", $name, $age);

//     // Output the values read from the file
//     echo "Name: " . $name . "<br>";
//     echo "Age: " . $age . "<br>";

//     fclose($file); // Close the file
// } else {
//     echo "Failed to open the file.";
// }
// fscanf(STDIN,'%d %d %c %f %f',$a,$b,$c,$d,$e);
// echo $a."<br>". $b ."<br>".$c."<br>".$d."<br>".$e."<br>";
// echo $a."\n". $b ."\n".$c."\n".$d."\n".$e."\n";
// echo implode("\n", explode(' ',readline()));
// /********************/
// fscanf(STDIN , '%d %d', $a , $b );
// echo $a . ' + ' . $b . '=' . $a + $b . '\n';
// echo $a . ' * ' . $b . '=' . $a * $b . '\n';
// echo $a . ' - ' . $b . '=' . $a - $b . '\n';
// <?php

// // Read the input numbers
// $input = readline();
// list($x, $y) = explode(" ", $input);

// // Calculate the results
// $sum = $x + $y;
// $product = $x * $y;
// $diff = $x - $y;

// // Print the results
// echo "$x + $y = $sum\n";
// echo "$x * $y = $product\n";
// echo "$x - $y = $diff\n";
/***********************************/
// fscanf(STDIN , '%d %d %d %d', $a , $b, $c, $d);
// $result = ($a*$b)-($c*$d);
// echo "Difference  =  ".$result;

/***********************************/
// fscanf(STDIN,'%f',$r);
// const PI = 3.141592653;
// $result = (PI)*($r*$r);
// // $result = (PI)*($r**2);
// echo sprintf('%.9f',$result);
/***********************************/
// fscanf(STDIN , '%d %d', $a , $b );
// $result = ($a % 10)+($b%10); ;
// echo $result;
// *********======\
// fscanf(STDIN , '%d %d', $a , $b );
// $a =substr((string) $a,-1);
// $b =substr((string) $b,-1);
// $result =$a+$b;
// echo $result;
/***********************************/
// $a = readline();
// echo $a*($a+1)/2;
// $sum = 0;
// for($i=0;$i<=$a;$i++){
//     $sum+=$i;
// }
// echo $sum;
// echo $a*($a+1)/2;
/***********************************/
// Read the input numbers A and B
// fscanf(STDIN , '%d %d', $a , $b );//1
// list($A, $B) = explode(" ", readline());//2
// $a = readline();//3
// $b = readline();//3
// Calculate the division of A and B
// $division = $a / $b;
// // Calculate the floor, ceil, and round of the division
// $floorResult = floor($division);
// $ceilResult = ceil($division);
// $roundResult = round($division);
// // Print the results
// echo "floor $a / $b = ".$floorResult . "\n";
// echo "ceil  $a / $b = ".$ceilResult . "\n";
// echo "round $a / $b = ".$roundResult . "\n";
// // floor 10 / 3 = 3
// // ceil 10 / 3 = 4
// // round 10 / 3 = 3
//================================================================<?php

// // Read the input numbers A and B
// list($A, $B) = explode(" ", readline());
// // Calculate the division of A and B
// $division = $A / $B;
// // Output the results
// echo "floor {$A} / {$B} = " . floor($division) . "\n";
// echo "ceil {$A} / {$B} = " . ceil($division) . "\n";
// echo "round {$A} / {$B} = " . round($division) . "\n";
// /***********************************/
// list($A, $B) = explode(" ", readline());
// if($A>$B |$A>$B){
//     echo "Yes";
// }
// else{
//     echo "No";
// }
/***********************************/
// "Multiples" or "No Multiples" 
// list($A, $B) = explode(" ", readline());
// if($A % $B == 0 | $B>$A == 0){
// // if ($A % $B === 0 || $B % $A === 0) {
//     // if ($A % $B == 0 | $B % $A == 0) {
//     echo "Multiples";
// }
// else{
//     echo "No Multiples";
// }
/***********************************/
// list($A, $B) = explode(" ", readline());
// if($A % $B ==0 | $B % $A == 0){
//     echo "Multiples";
// }
// else{
//     echo "No Multiples";
// }
/***********************************/
// list($A, $B, $C) = explode(" ", readline());
// // $A = intval($A);
// // $B = intval($B);
// // $C = intval($C);
// $A = intval($A); $B = intval($B); $C = intval($C);
// $minimum = min($A, $B, $C);
// $maximum = max($A, $B, $C);
// echo $minimum . " " . $maximum;
/***********************************/
// function checkBrothers($name1, $name2) {
//     $nameParts1 = explode(" ", $name1);
//     $nameParts2 = explode(" ", $name2);
    
//     $lastName1 = $nameParts1[1];
//     $lastName2 = $nameParts2[1];
    
//     if ($lastName1 == $lastName2) {
//         return "ARE Brothers";
//     } else {
//         return "NOT";
//     }
// }
// $name1 = readline();
// $name2 = readline();

// // Checking if they are brothers
// $result = checkBrothers($name1, $name2);

// // Printing the result
// echo $result;
///**************************/
// F1, S1
// $name1 = readline();
// $name2 = readline();
// $nameParts1 = explode(" ", $name1);
// $nameParts2 = explode(" ", $name2);
// $lastName1 = $nameParts1[1];
// $lastName2 = $nameParts2[1];
// if ($lastName1 == $lastName2) {
//     echo "ARE Brothers";
// } else {
//     echo "NOT";
// }
/***********************************/
 // ord The ord() function takes a single character as input and returns its corresponding ASCII value as an integer.
// <?php
// <?php
//    $char = readline();
//     $X = ord($char);
    
//     if ($X >= 48 && $X <= 57) {
//         echo "IS DIGIT";
//     } elseif ($X >= 65 && $X <= 90) {
//         echo "ALPHA\nIS CAPITAL";
//     } elseif ($X >= 97 && $X <= 122) {
//         echo "ALPHA\nIS SMALL";
//     }
// <?php
//     $char = readline();
//     if (ctype_digit($char)) {
//         echo "IS DIGIT";
//             }
//     elseif (ctype_alpha($char)) {
//         if (ctype_upper($char)) {
//             echo"ALPHA\nIS CAPITAL";
//                 }
//         else{
//             echo"ALPHA\nIS SMALL";
//         }
//             }
/************************ */
// <?php
// $char = readline();
// $X = ord($char);
// if ($X >= 97 && $X <= 122) {
//     // Convert lowercase letter to uppercase
//     $Capital_letter = chr($X - 32);
//     echo $Capital_letter;
// }
// else if ($X >= 65 && $X <= 90) {
//     // Convert uppercase letter to lowercase
//     $Small_letter = chr($X + 32);
//     echo $Small_letter;
// }
//=========O=============/
// $num = readline();
// $str_num = strval($num);
// $first_digit = intval($str_num[0]);
// // last_digit = int(s[-1])
// if ($first_digit % 2 == 0) {
//     echo "EVEN";
// } else {
//     echo "ODD";
// }
/************O***********************/
// $input = readline();
// $arr = str_split($input);
// $first_element = $arr[0];
// if($first_element % 2 == 0){
//     echo "EVEN";
// }
// else
// echo "ODD";
/***********************************/
// $coordinates = readline();
// list($x, $y) = explode(' ', $coordinates);

// if ($x == 0 && $y == 0) {
//     echo "Origem";
// } elseif ($x == 0) {
//     echo "Eixo Y";
// } elseif ($y == 0) {
//     echo "Eixo X";
// } elseif ($x > 0 && $y > 0) {
//     echo "Q1";
// } elseif ($x < 0 && $y > 0) {
//     echo "Q2";
// } elseif ($x < 0 && $y < 0) {
//     echo "Q3";
// } else {
//     echo "Q4";
// }
/***********************************/
// $expression = readline();
// list($A, $operator, $B) = explode(" ", $expression);
// $A = intval($A);
// $B = intval($B);
// $operator = strval($operator);
// if ($operator == '+') {
//     $C=$A+$B;
// } elseif ($operator == '-') {
//     $C=($A-$B);
// } elseif ($operator == '*') {
//     $C=($A*$B);
// } elseif ($operator == '/') {
//     $C=($A/$B);
// }
// echo $C;
// //===========calculator======================/
// $expression = readline();
// // list($A, $op, $B) = sscanf($expression, "%d%s%d");
// list($A, $op, $B) =explode(" ", $expression,"%d%s%d");

// switch ($op) {
//     case '+':
//         $result = $A + $B;
//         break;
//     case '-':
//         $result = $A - $B;
//         break;
//     case '*':
//         $result = $A * $B;
//         break;
//     case '/':
//         $result = $A / $B;
//         break;
// }

// echo $result;
/***********************************/
// <?php
// $x = readline();
// $years = intval($x/365);
// $x -= intval($years*365);
// $months = intval($x/30);
// $x -= $months*30;
// echo $years ." "."years"."\n";
// echo $months ." "."months"."\n";
// echo $x ." "."days"."\n";
// /****** */
// <?php
// $days = readline();//400
// $years = intval($days/365);//1
// $days %= 365;//35
// $months = intval($days/30);
// $days %= 30;
// echo $years ." "."years"."\n";
// echo $months ." "."months"."\n";
// echo $days ." "."days"."\n";
/***********************************/
// <?php
// $input = readline();
// list($A, $B, $C) = explode(' ', $input);
// $values = [$A, $B, $C];
// sort($values);
// foreach ($values as $value) {
//     echo $value . "\n";
// }
// echo "\n";
// foreach ([$A, $B, $C] as $value) {
//     echo $value . "\n";
// }

/***********************************/
// <?php

// $input = readline();
// $X = floatval($input);

// if ($X >= 0 && $X <= 25) {
//     echo "Interval [0,25]";
// } elseif ($X > 25 && $X <= 50) {
//     echo "Interval (25,50]";
// } elseif ($X > 50 && $X <= 75) {
//     echo "Interval (50,75]";
// } elseif ($X > 75 && $X <= 100) {
//     echo "Interval (75,100]";
// } else {
//     echo "Out of Intervals";
// }
/***********************************/
// <?php

// $input = readline();
// list($A, $S, $B) = sscanf($input, "%d%c%d");

// switch ($S) {
//     case '+':
//         $result = $A + $B;
//         break;
//     case '-':
//         $result = $A - $B;
//         break;
//     case '*':
//         $result = $A * $B;
//         break;
//     case '/':
//         $result = intval($A/$B);// the best 31sec
//         // $result = $A / $B;// floating-point division
//         $result = intdiv($A, $B); //  integer division and discard any fractions. 46 sec
//         break;
// }

// echo $result;
/***********************************/
// <?php
// $input = readline();
// $N = floatval($input);
// if (is_float($N)  |$decimalPart == 0) {
//     $integerPart = intval($N);
//     $decimalPart = $N - $integerPart;
//     echo "float $integerPart $decimalPart";
// } elseif (is_int($N)) {
//     echo "int $N";
// }
/***********************************/
// <?php
// $input = readline();
// list($A, $S, $B) = sscanf($input, "%d %s %d");
// switch ($S) {
//     case '<':
//         if ($A < $B) {
//             echo "Right";
//         } else {
//             echo "Wrong";
//         }
//         break;
//     case '>':
//         if ($A > $B) {
//             echo "Right";
//         } else {
//             echo "Wrong";
//         }
//         break;
//     case '=':
//         if ($A == $B) {
//             echo "Right";
//         } else {
//             echo "Wrong";
//         }
//         break;
// }

/***********************************/
// <?php
// $input = readline();
// list($A, $S, $B, $Q, $C) = sscanf($input, "%d %s %d %s %d");
// switch ($S) {
//     case '+':
//         $result = $A + $B;
//         break;
//     case '-':
//         $result = $A - $B;
//         break;
//     case '*':
//         $result = $A * $B;
//         break;
// }

// if ($Q == '=' && $result == $C) {
//     echo "Yes";
// } else {
//     echo $result;
// }
// $Q == '=' checks if the value of $Q, which represents the equality sign in the expression, is equal to '='.
// $result == $C checks if the calculated result is equal to the value of $C.
/***********************************/
// <?php
// $input = readline();
// list($A,$B,$C,$D) = sscanf($input, "%d %d %d %d");
// $mul = $A*$B*$C*$D;
// strval($mul);
// $stroflast2 = substr($mul, -2);
// $y = intval($stroflast2);
// echo $y;
// $stroflast2 =
// $x = $stroflast2[-2:];

// <?php
// $input = readline();
// list($A, $B, $C, $D) = sscanf($input, "%d %d %d %d");
// $mul = ($A * $B * $C * $D) % 100;
// echo sprintf("%02d", $mul);
// $stroflast2 = substr($mul, -2);
// $mul = $A * $B * $C * $D;
// echo $stroflast2;
// <?php
// $input = readline();
// list($A, $B, $C, $D) = explode(' ', $input);
// $mul = ($A * $B * $C * $D) % 100;
// echo sprintf("%02d", $mul);
// <?php
// $input = readline();
// list($A, $B, $C, $D) = explode(' ', $input);
// // Calculate the last two digits of the multiplication
// $lastTwoDigits = 1;
// $numbers = [$A, $B, $C, $D];
// foreach ($numbers as $number) {
//     $lastTwoDigits = ($lastTwoDigits * ($number % 100)) % 100;
// }
// echo sprintf("%02d", $lastTwoDigits);
// Inside the loop, we calculate the product of $lastTwoDigits and the last two digits of the current number. To obtain the last two digits of a number, we use the modulo operator % with a divisor of 100 ($number % 100). This operation ensures that we only consider the remainder when dividing the number by 100, effectively extracting the last two digits.

// We then update the value of $lastTwoDigits by multiplying it with the calculated last two digits of the current number. This step ensures that we accumulate the product of the last two digits of all the numbers in the input.
// $number=280;
// echo ($number % 100);//80
//====best
// <?php
// $input = readline();
// list($A, $B, $C, $D) = explode(' ', $input);

// // Calculate the last two digits of the multiplication
// $mul = ($A % 100) * ($B % 100) * ($C % 100) * ($D % 100);
// $lastTwoDigits = $mul % 100;
// echo sprintf("%02d", $lastTwoDigits);
/***********************************/
// <?php
// $input = readline();
// list($l1, $r1, $l2, $r2) = explode(' ', $input);
// $intersection_left = max($l1, $l2);
// $intersection_right = min($r1, $r2);
// if ($intersection_left <= $intersection_right) {
//     echo $intersection_left . ' ' . $intersection_right;
// } else {
//     echo -1;
// }
?>
/************************************/
<?php
$input = readline();
list($A, $B, $C, $D) = explode(' ', $input);
if ($B * log($A) > $D * log($C)) {
// if ($B * log10($A) > $D * log10($C)) {
// if (($A ** $B) > ($C ** $D)) {
// if (bcpow($A, $B) > bcpow($C, $D)) {
// if (pow($A, $B) > pow($C, $D)) {
    echo "YES";
} else {
    echo "NO";
}
/*Certainly! When dealing with very large numbers, directly comparing the exponentiation results can lead to inaccuracies due to the limitations of floating-point arithmetic. Floating-point numbers have a limited precision, and as a result, the calculations may introduce rounding errors.

To overcome this limitation and accurately compare the relative magnitudes of large numbers, we can take the logarithm of the numbers instead. The logarithm operation compresses the magnitude of a number into a more manageable range. By comparing the logarithms, we can determine the relative order of magnitude between the numbers without encountering precision issues.

In the updated code, we calculate the logarithm of A and C using the `log()` function. The logarithm of a number provides a measure of the exponent to which a base (in this case, the natural logarithm base e) must be raised to obtain the original number. By multiplying the logarithms by their respective exponents (B and D), we effectively compare the original numbers AB and CD.

Comparing the logarithms avoids the precision issues that can occur when comparing large numbers directly. It ensures a more accurate comparison and provides the correct result when determining whether AB is greater than CD.

I apologize for the confusion caused by the previous responses. If you have any further questions, please let me know.*/

/***********************************/
/***********************************/
/***********************************/
/***********************************/
/***********************************/
/***********************************/
/***********************************/
/***********************************/
/***********************************/
/***********************************/
/***********************************/
/***********************************/
/***********************************/
/***********************************/
/***********************************/
/***********************************/