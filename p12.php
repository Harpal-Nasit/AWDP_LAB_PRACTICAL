<?php
echo "<h1 style='color:red;align = center'>Programm:12</h1>";

echo "<h2> 4 students score list by foreach loop</h2>";
// Define an array of student grades
$grades = [
    "A" => 85,
    "B" => 92,
    "C" => 78,
    "D" => 88
];

// Use foreach to iterate over the array with keys and values
foreach ($grades as $student => $grade) {
    echo "$student scored $grade.<br>";
}
?>
