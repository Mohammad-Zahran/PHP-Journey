<?php

function Reverse($n){
    $i = $n;
    $remainder = 0;
    $Rev = 0;

    while($i!=0){
        $remainder = $i%10;
        $Rev = $Rev*10 + $remainder;
        $i=(int)($i/10);
    }

    return $Rev;
}

function isPalindrome($n){
    return $n == Reverse($n);
}

$number = 103;
if(isPalindrome($number)){
    echo "$number is Palindrome";
}
else{
    echo "$number is not a Palindrome";
}

?>