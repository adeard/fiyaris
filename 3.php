<?php 

$array = [20,10,100,30,15,5];

echo "No 1";
sort($array);
foreach ($array as $key => $value) {
    echo "<pre>";    
    print_r(($key+1).". ".$value);
}

echo "<pre>";
echo "---------------------------";
echo "<pre>";

echo "No 2";
$array[] = 120;
echo "<pre>";
print_r($array);

echo "<pre>";
echo "---------------------------";
echo "<pre>";

echo "No 3";
$del_val = 10;
if (($key = array_search($del_val, $array)) !== false)
    unset($array[$key]);
echo "<pre>";
print_r($array);

exit;