<?php 

$a = 0;
$b = 1;

while ($b<=800){
    print "$b\n";
    $a = $b - $a;
    $b = $a + $b;
}