<?php
echo "<h1 style='color:red;align = center'>Programm:8</h1>";
// Arithmetic Operators
$a = 10;
$b = 5;

echo "Arithmetic Operators:<br>";
echo"a=$a , b=$b<br>";
echo "a + b = " . ($a + $b) . "<br>"; // Addition
echo "a - b = " . ($a - $b) . "<br>"; // Subtraction
echo "a * b = " . ($a * $b) . "<br>"; // Multiplication
echo "a / b = " . ($a / $b) . "<br>"; // Division
echo "a % b = " . ($a % $b) . "<br>"; // Modulus
echo "a ** b = " . ($a ** $b) . "<br>"; // Exponentiation

// Assignment Operators
$c = 7;

echo "<br>Assignment Operators:<br>";
echo"c=$c<br>";
$c += 3; // Equivalent to $c = $c + 3   
echo "c += 3 => c = " . $c . "<br>";
$c -= 2; // Equivalent to $c = $c - 2
echo "c -= 2 => c = " . $c . "<br>";
$c *= 4; // Equivalent to $c = $c * 4
echo "c *= 4 => c = " . $c . "<br>";
$c /= 2; // Equivalent to $c = $c / 2
echo "c /= 2 => c = " . $c . "<br>";
$c %= 5; // Equivalent to $c = $c % 5
echo "c %= 5 => c = " . $c . "<br>";


// Comparison Operators
$d = 10;
$e = 20;

echo "<br>Comparison Operators:<br>";
echo"d=$d , e=$e<br>";
echo "d == e -> " . ($d == $e ? 'true' : 'false') . "<br>"; // Equal
echo "d != e -> " . ($d != $e ? 'true' : 'false') . "<br>"; // Not equal
echo "d > e -> " . ($d > $e ? 'true' : 'false') . "<br>"; // Greater than
echo "d < e -> " . ($d < $e ? 'true' : 'false') . "<br>"; // Less than
echo "d >= e -> " . ($d >= $e ? 'true' : 'false') . "<br>"; // Greater than or equal to
echo "d <= e -> " . ($d <= $e ? 'true' : 'false') . "<br>"; // Less than or equal to

// Logical Operators
$f = true;
$g = false;

echo "<br>Logical Operators:<br>";
echo "f && g -> " . ($f && $g ? 'true' : 'false') . "<br>"; // Logical AND
echo "f || g -> " . ($f || $g ? 'true' : 'false') . "<br>"; // Logical OR
echo "!f -> " . (!$f ? 'true' : 'false') . "<br>"; // Logical NOT

// Increment/Decrement Operators
$h = 5;

echo "<br>Increment/Decrement Operators:<br>";
echo"h=$h<br>";
echo "h++ = " . $h++ . "<br>"; // Post-increment
echo "h = " . $h . "<br>"; // After increment
echo "++h = " . ++$h . "<br>"; // Pre-increment
echo "h-- = " . $h-- . "<br>"; // Post-decrement
echo "h = " . $h . "<br>"; // After decrement
echo "--h = " . --$h . "<br>"; // Pre-decrement

// Bitwise Operators
$i = 5; // 0101 in binary
$j = 3; // 0011 in binary

echo "<br>Bitwise Operators:<br>";
echo"i=$i , j=$j<br>";
echo "i & j = " . ($i & $j) . "<br>"; // Bitwise AND
echo "i | j = " . ($i | $j) . "<br>"; // Bitwise OR
echo "i ^ j = " . ($i ^ $j) . "<br>"; // Bitwise XOR
echo "~i = " . (~$i) . "<br>"; // Bitwise NOT
echo "i << 1 = " . ($i << 1) . "<br>"; // Bitwise left shift
echo "i >> 1 = " . ($i >> 1) . "<br>"; // Bitwise right shift

?>
