<?php
declare(strict_types=1);
// Below are several code blocks, read them, understand them and try to find whats wrong.
// Once this exercise is finished, we'll go over the code all together and we can share how we debugged the following problems.
// Try to fix the code every time and good luck ! (write down how you found out the answer and how you debugged the problem)
// =============================================================================================================================

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong

// echo "Exercise 1 starts here:";

function new_exercise($x)
{
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

new_exercise(1);
echo "<br>Exercise one was a succes!";

// === Exercise 2 ===
new_exercise(2);
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
$monday = $week[0];

echo $monday;


// === Exercise 3 ===
new_exercise(3);
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = "Debugged! Also very fun";
echo substr($str, 0, 10);


// === Exercise 4 ===
new_exercise(4);
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it
// Bonus: can you fix it with changing just one character? (hard)

foreach($week as &$day)
{
    $day = substr($day, 0, -3);
}

print_r($week);

// === Exercise 5 ===
new_exercise(5);
// The result should be: "Copyright © <current year> - BeCode"
function copyright($year)
{
    return "&copy; $year BeCode";
}
//print the copyright
print copyright(date('Y'));

// === Exercise 6 ===
new_exercise(6);
// The array should be printing every letter of the alphabet (a-z)
// Fix the code so the for loop pushes each letter of the alphabet in the array


