<?php

// preg_filter() function
    // Example 1.
    $fruits = array("apple", "banana", "orange", "grape", "peach", "pineapple", "ananas");
    $pattern = '/an/';
    $replacement = 'XX';
    $new_fruits = preg_filter($pattern, $replacement, $fruits);
    // print_r($new_fruits); // Array ( [0] => apple [1] => bXXana [2] => orange [3] => grape [4] => peach [5] => pineXXple [6] => XXanas )
    
    // Example 2.
    $numbers = array(10, 2, 30, 40, 50, 7);
    $pattern = '/\d+/';
    $replacement = '100';
    $new_numbers = preg_filter($pattern, $replacement, $numbers);
    // print_r($new_numbers); // Array ( [0] => 100 [1] => 100 [2] => 100 [3] => 100 [4] => 100 [5] => 100 )


// preg_grep() function
    $fruits = array("apple", "banana", "orange", "grape", "peach", "pineapple", "ananas");
    $pattern = '/an/';


?>