<?php
$num = 4;
$factorial = 1;

for ($i=$num; $i>=1; $i--)
{
    $factorial = $factorial * $i;
}

echo "The factorial of $num is $factorial";