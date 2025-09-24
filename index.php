<?php
$name ="Merve";
$age ="23";
echo "My name is $name an I am $age years old.";


$a =10;
$b =20;

$addition = $a + $b;
$substraction = $a - $b;
$multiplication = $a * $b;
$division = $b / $a;
echo "<br/>Addition: $addition 
<br/>Substraction: $substraction 
<br/>Multiplication: $multiplication 
<br/>Division: $division";


#if else

$age = 18;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are not an adult.";
}

#while loop
 
$i = 1;

while ($i <= 5) {
    echo "<br>Number: $i";
    $i++;
    echo"while loop";
}

#for loop

for ($i = 1; $i <= 5; $i++) {
    echo "<br>Number: $i";
    echo"for loop";
}

#foreach loop

$colors = array("Red", "Green", "Blue");

foreach ($colors as $color) {
    echo "<br>Colour: $color ";
}

function greet($name) {
    echo "<br>Hello, $name! <br>";
}

greet("Merve");
greet("Hugh");



// Define a function called "average" that takes one parameter: $numbers (an array)
function average($numbers) {
    // Start with a sum of 0
    $sum = 0;

    // Count how many items are inside the array
    $count = count($numbers);

    // Loop through each number in the array
    foreach ($numbers as $num) {
        // Add the current number to the running total
        $sum += $num;
    }

    // Divide the total sum by the number of items to get the average
    return $sum / $count;
}

// Create an array of grades
$grades = [80, 90, 75, 100];

// Call the average() function with the $grades array
// and print the result with a label
echo "<br><br>Average: " . average($grades);

?>
