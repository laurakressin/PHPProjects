<?php
$creditCard = "2354-9847-9384";

$numOfDig = -4;

$replace = 'xxxx';

$obscured = substr_replace($creditCard, $replace, $numOfDig);

print $obscured;
?>