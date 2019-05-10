<?php

function Palindrome($word) {
$word_lenght = strlen($word) - 1;
$output = '';
    for ($i = $word_lenght; $i >= 0; $i--){
    $output .= $word[$i];
    }
        if ($output == $word){
            echo "true";
        }
        else{
        echo "false";
        }
}
Palindrome('hallo');
