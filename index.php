<?php

function calculateTax($num)
{
    if (gettype($num) == 'string') die('Please provide a number');

    if ($num <= 1) die('The number needs to higher than 1');

    $result = $num * (22 / 100);

    return $result;
};

$taxAmountToPay = calculateTax(100);
echo ("You have to pay $$taxAmountToPay tax money");

/*
function calculateTax(int $num): float
{
    if (gettype($num) == 'string') die('Please provide a number');

    if ($num <= 1) die('The number needs to higher than 1');

    (float) $result = $num * (22 / 100);

    return $result;
};

$taxAmountToPay = calculateTax(100);
echo ("You have to pay $$taxAmountToPay tax money");
*/