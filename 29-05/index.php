<?php

define('MIN_NUM', 1);
define('MAX_NUM', 100);

$numRand = rand(MIN_NUM, MAX_NUM);


function validateNumber(){
    do {
        $numUser = intval(readline("Enter a number between 1 and 100: "));
        if (!is_numeric($numUser) || $numUser < 1 || $numUser > 100) {
            echo "Invalid input. Please enter a number between 1 and 100.\n";
        }
        else {
            return $numUser;
        }
    } while (!is_numeric($numUser) || $numUser < 1 || $numUser > 100);

}

do{
    $numUser = validateNumber();

    if($numUser > $numRand) {
        echo "Your number is greater than the random number.\n";
    } elseif($numUser < $numRand) {
        echo "Your number is less than the random number.\n";
    } else {
        echo "The number in correct!";
    }

} while($numUser != $numRand);

?>