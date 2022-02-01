<?php

// Create simple string
    $hello = "get going";
    $string = 'Hello lets ' .$hello.' with this';
    echo $string ."<br>";
    $string2 = "hello lets $hello with this";
    echo $string2 ."<br>";
    echo "<br>";
    
// String concatenation
    echo "hello " . "get the best " . "out";
    echo "<br>";
    echo "<br>";
    
// String functions
    echo "<strong>String functions</strong>" .'<br>';
    $words = "      Hello    World     ";
    echo "1 - " . strlen($words) . '<br>' . PHP_EOL;
    echo "2 - " . trim($words) . "<br>" . PHP_EOL;
    echo "3 - " . ltrim($words) . "<br>" . PHP_EOL;
    echo "4 - " . rtrim($words) . "<br>" . PHP_EOL;
    echo "5 - " . str_word_count($words) . "<br>" . PHP_EOL;
    echo "6 - " . strrev($words) . "<br>" . PHP_EOL;
    echo "7 - " . strtoupper($words) . "<br>" . PHP_EOL;
    echo "8 - " . strtolower($words) . "<br>" . PHP_EOL;
    echo "9 - " . ucfirst("hello") . "<br>" . PHP_EOL;
    echo "10 - " . lcfirst("HELLO") . "<br>" . PHP_EOL;
    echo "11 - " . ucwords("hello word"). "<br>" . PHP_EOL;
    echo "12 - " . strpos($words, "hello") . "<br>" . PHP_EOL;
    echo "13 - " . stripos($words, "word") . "<br>" . PHP_EOL;
    echo "14 - " . substr($words, 8, 6) . "<br>" . PHP_EOL;
    echo "15 - " . str_replace("World", "Php", $words) . "<br>" . PHP_EOL;
    echo "16 - " . str_ireplace("world", "php", $words) . "<br>" . PHP_EOL;
    echo "<br>" . PHP_EOL;

    $invoiceNumber = 100;
    $invoiceNumber2 = 123456;
    echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
    echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
    echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;
    echo "<br>" . PHP_EOL;

// Multiline text and line breaks
    echo "<b>Multiline text and line breaks</b>" . "<br>";
    $longText = "
        Hello, <b>Laravel</b> and <b>php</b> 
        got nothing 
        on me, I say
    ";
    echo $longText . "<br>";
    echo "<br>" . PHP_EOL;
    
// Multiline text and reserve html tags
    echo "<b>Multiline text and reserve html tags</b>" . "<br>";
    $longText = "
        Hello, my name is <b>Zura</b>
        I am <b>27</b>,
        I love my daughter
    ";
    echo "1 - " . $longText . '<br>';
    echo "2 - " . nl2br($longText) . '<br>';
    echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
    echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
    echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
    echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;
    echo "<br>";
    
// https://www.php.net/manual/en/ref.strings.php
    echo "<a href='https://www.php.net/manual/en/ref.strings.php'>Learn more on strings functions</a>";