<?php
/**
 * User: jralava
 * Date: 8/26/2017
 * Time: 8:39 PM
 */

$value1 = 'toto';
$value2 = 'toot';

if(is_anagram($value1,$value2)){
    $result = "Yes !!! %s and %s are anagarm";
    echo sprintf($result,$value1,$value2);
}else{
    $result = "Ooh !!! %s and %s aren't anagarm";
    echo sprintf($result,$value1,$value2);
}

function is_anagram($value1,$value2){
    if(count_chars($value1, 1) == count_chars($value2, 1)){
        return true;
    }
    else{
        return false;
    }
}