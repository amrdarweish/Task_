<?php
$sum = 0;
for($x=1; $x<=30; $x++)
{
    $sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$i=1;
while($i <= 15){
    if($i % 2 == 0){
        echo $i." - Even,  ";
        echo "<br>";
    }else{
        echo $i." - Odd,  ";
    }
    $i++;
}