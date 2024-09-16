<?php
echo "<h1 style='color:red;align = center'>Programm:11</h1>";

// Initialize the array
$arr = [];

// Populate the array with odd numbers from 1 to 11
for ($i = 1; $i <= 11; $i += 2) {
    $arr[] = $i;
}

// Calculate the sum of the array values
$sum = array_sum($arr);

// Output the result
echo "The array element is: " . implode(", ", $arr) . "<br>";
echo "The sum of the array elements is: " . $sum;
?>
