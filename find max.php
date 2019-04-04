<?php
function finMax($array)
{
    $max = $array[0][0];
    for ($index1 = 0; $index1 < count($array); $index1++){
        for($index2 = 0;$index2<count($array[$index1]);$index2++){
            if($max<$array[$index1][$index2]){
                $max = $array[$index1][$index2];
            }
        }
    }return $max;
}
$array = [[4545,45,2,1,15,1000],[555,45,5,45,5],[55,1,545,22,44,2],[-55,-5,44,5],[11,5,1,88,4],[44,4,8,4]];
print_r($array);
echo "<br>".finMax($array);
?>