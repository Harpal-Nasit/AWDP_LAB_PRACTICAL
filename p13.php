<?php
echo "<h1 style='color:red;align = center'>Programm:13</h1>";

// Arrays
echo "<h2>Array Functions</h2>";
$numbers = [1, 2, 3, 4, 5];
echo "Original Array: " . implode(", ", $numbers) . "<br>";

array_push($numbers, 6);
echo "After array_push(6): " . implode(", ", $numbers) . "<br>";

array_pop($numbers);
echo "After array_pop(): " . implode(", ", $numbers) . "<br>";

sort($numbers);
echo "Sorted Array: " . implode(", ", $numbers) . "<br>";

// Strings
echo "<h2>String Functions</h2>";
$text = "Hello, World!";
echo "Original String: " . $text . "<br>";
echo "Uppercase: " . strtoupper($text) . "<br>";
echo "Lowercase: " . strtolower($text) . "<br>";
echo "Length: " . strlen($text) . "<br>";
echo "Replaced: " . str_replace("World", "PHP", $text) . "<br>";

// Dates
echo "<h2>Date Functions</h2>";
echo "Current Date and Time: " . date("Y-m-d H:i:s") . "<br>";
echo "Today is: " . date("l") . "<br>";
echo "Date 10 days from now: " . date("Y-m-d", strtotime("+10 days")) . "<br>";

// Math
echo "<h2>Math Functions</h2>";
$a = 15;
$b = 4;
echo "Sum: " . ($a + $b) . "<br>";
echo "Difference: " . ($a - $b) . "<br>";
echo "Product: " . ($a * $b) . "<br>";
echo "Quotient: " . ($a / $b) . "<br>";
echo "Maximum: " . max($a, $b) . "<br>";
echo "Minimum: " . min($a, $b) . "<br>";
echo "Random Number (1-100): " . rand(1, 100) . "<br>";
?>
