<?php
/**
 * Created by PhpStorm.
 * User: !ntruder
 * Date: 23-05-2015
 * Time: 12:12
 */
function unique_random($min,$max,$quantity) {
    $numbers = range($min,$max);
    shuffle($numbers);
    return array_slice($numbers,0,$quantity);
}
for($i=0;$i<5;$i++) {
    $remain_sub_list = unique_random(0, 5, 2);
    print_r($remain_sub_list)."<br>";
}