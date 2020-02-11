<?php

$val = 1;
$total_loop = 8;

for ($i=0; $i < $total_loop; $i++) { 
    if ($i != 0)
        $val = $val+2;
        
    echo "<pre>";
    print_r($val);
}