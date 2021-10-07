<?php
$a = 1;
$b = 23;
$a = $a ^ $b;
$b = $b ^ $a;
$a = $a ^ $b;
echo $a;
echo $b;