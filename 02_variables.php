<?php

// What is a variable
    // a container to hold or store values

// Variable types
    /* in php variables do not have type (php is loosely typed) and so when
    we declare a variable we don't specify the type (variables have dynamic types)
    and so it changes depending on the value we assign to it

    Variable Types:
        String
        Integer
        Float / Double
        Boolean
        Null
        Array
        Object
        Resource
    */

// Declare variables
    /* we use the $(dollar sign) to declare the variable
         $variableName
    */
    $name = "Zeka"; //string
    $age = 34; // integer
    $isFemale = true; // boolean
    $height = 1.85; // float, double
    $salary = null; // null

// Print the variables. Explain what is concatenation

    echo $name. "<br>";
    echo $age. '<br>';
    echo $isFemale. '<br>';
    echo $height. "<br>";
    echo $salary. "<br>";

// Print types of the variables
    echo gettype($name) . '<br>';
    echo gettype($age) . "<br>";
    echo gettype($isFemale) . "<br>";
    echo gettype($height) . "<br>";
    echo gettype($salary) . "<br>";

// Print the whole variable
    var_dump($name, $age, $isFemale, $height, $salary);

    // Change the value of the variable
    $name = false;

    // Print type of the variable
    echo "<br>";
    echo gettype($name). '<br>';

    // Variable checking functions
    is_string($name); //false
    is_int($age); //true
    is_bool($isFemale); // true
    is_double($height); // true

// Check if variable is defined
     isset($name); //true
    isset($address); // false

// Constants
    // variables that when set cannot be changed we use
    // function define to define a constant

    define('PI', 3.14); // define the constant name and the constant value
    echo PI. '<br>';

// Using PHP built-in constants
    echo SORT_ASC. '<br>';
    echo PHP_INT_MAX. '<br>'; // max int number php can have