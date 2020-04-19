<?php
function convertDecimalToBinary($number)
{
    $stack = new \convert_decimal_to_binary\Stack();
    while ($number > 1) {
        $stack->push($number % 2);
        $number = $number / 2;
    }
    $stack->toString();
}
