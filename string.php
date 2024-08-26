<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count the vowels in the string
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);

    // Reverse the string
    $reversedString = strrev($string);

    // Output the result
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString" . PHP_EOL;
}
?>
