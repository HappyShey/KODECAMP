<?php

print_r("Welcome to smart calculator\n");
print_r("Input Your Calculations Below \n");

$firstValue = readline("enter value first value ");

$operator = readline("enter value operator ");

//*+-/
switch($operator) {
 case in_array($operator, ['/', '*', '+', '-']):
  break;
 default:
  print_r("invalid operator");
  return;
}

$secondValue = readline("enter value of second number ");

if($operator === '/') $result = $firstValue / $secondValue; {
  if($firstValue = '0') $result = '0';
  if($secondValue = '0') $result = '0'; 
}
if($operator === '*') $result = $firstValue * $secondValue;
if($operator === '+') $result = $firstValue + $secondValue;
if($operator === '-') $result = $firstValue - $secondValue;

print_r("result is $result\n");

