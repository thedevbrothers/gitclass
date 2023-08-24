<?php
// The string to count characters in
$string = "hello world";

// Convert the string to an array of characters
$chars = str_split($string);



echo "<pre>";
print_r($chars);
echo "</pre>";


// Initialize an empty array to hold character counts
$charCounts = array();

// Loop through each character in the array and increment its count in the charCounts array
foreach ($chars as $char) {
    
    if (isset($charCounts[$char])) {
        $charCounts[$char]++;
    } else {
        $charCounts[$char] = 1;
    }
}

// Output the character counts
foreach ($charCounts as $char => $count) {
    echo "Character '$char' occurs $count times in the string.<br>";
}
?>