<?php

// Declaring numbers
    $a = 4;
    $b = 7;
    $d = 3.4;

// Arithmetic operations
    echo $a + $b + $d . "<br>";
    echo "multiplication, * " . '<br>';
    echo "division, / " . "<br>";
    echo "addition, +" . "<br>";
    echo "subtraction, -" . "<br>";
    echo "remainder, % " . "<br>";
    echo "<br>";

// Assignment with math operators
    echo "Assignment with math operators". "<br>";
    $a *= $b; echo $a. '<br>';
    $a /= $b; echo $a. '<br>';
    $a += $b; echo $a. '<br>';
    $a -= $b; echo $a. '<br>';
    $a %= $b; echo $a. '<br>';
    echo "<br>";

// Increment operator
    echo "Increment operator"."<br>";
    echo $a++. "<br>"; // 4 first the value of a is taken and printed out
                // and then a is increased by one
    echo ++$a. "<br>"; // 6 the value of a is increased and then printed
    echo "<br>";

// Decrement operator
    echo "Decrement operator"."<br>";
    echo $a--. "<br>"; // 6
    echo --$a. "<br>"; // 4
    echo "<br>";

// Number checking functions
    echo "Number checking functions". "<br>";
    echo is_float(1.23). "<br>"; // true
    echo is_int(45). "<br>"; // true 1
    echo is_numeric("34.5"). "<br>"; //true 1
    echo is_numeric("3h.56"). "<br>"; // false 0
    echo "<br>";

// Conversion
    echo "Conversion". "<br>";
    echo $strNumber = '12.34 ';
    echo var_dump($strNumber)."<br>";
    $number = (float)$strNumber;
    echo var_dump($number) . "<br>";
    echo "<br>";

// Number functions
    echo "Number functions". "<br>";
    echo "abs(-15) " . abs(-15) . "<br>";
    echo "pow(2, 3) " . pow(2, 3) . "<br>";
    echo "sqrt(16) " . sqrt(16) . "<br>";
    echo "max(2, 9, 3) " . max(2, 9, 3) . "<br>";
    echo "min(2, 4, 6) " . min(2, 4, 6) . "<br>";
    echo "round(2.4) " . round(2.4) . "<br>";
    echo "round(2.6) " . round(2.6) . "<br>";
    echo "floor(2.6) " . floor(2.6) . "<br>";
    echo "ceil(2.4) " . ceil(2.4) . "<br>";
    echo "<br>";

// Formatting numbers
    echo "Formatting numbers". "<br>";
    $number = 123456789.454655;
    echo number_format($number, 2, ',', ' '). "<br>";
    echo "<br>";

// https://www.php.net/manual/en/ref.math.php
    echo "Read more in the documentation". "<br>";
    echo '<a href="https://www.php.net/manual/en/ref.math.php"> more on Numbers and math in Php</a>';