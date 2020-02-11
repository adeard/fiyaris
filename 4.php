<?php 
$str = "Aku Suka Makan Nasi Padang";
$array = explode(" ",$str);
$length = count($array);
$loop = $length*2;
$result = [];

for ($i=0; $i < $loop; $i++) { 
    $value = [];

    if ($i < $length) {
        for ($j=0; $j <= $i; $j++) {
            $value[] = $array[$j]; 
        }
    } else {
        $index = $loop-$i;
        for ($j=$length; $j >= $index; $j--) {
            $value[] = $array[$j-1]; 
        }
    }
    
    $result[] = implode(" ",$value);
}

echo "<pre>";
print_r($result);

exit;