<?php
/*
 * Complete the 'newPassword' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. STRING a
 *  2. STRING b
 */

function newPassword($a, $b) {
    // Write your code here
    $result = "";
    
    if(strlen($a)>strlen($b))
    {
        $maior = strlen($a);
    }
    else
    {
        $maior = strlen($b);
    }
    for($i=0;$i<$maior;$i++)
    {
        $result .= $a[$i];
        $result .= $b[$i];
    }
    
    return $result;
}
