<?php
/*
 * Complete the 'closestNumbers' function below.
 *
 * The function accepts INTEGER_ARRAY numbers as parameter.
 * Return the closest pairs of an array
 */

function closestNumbers($numbers) {
    sort($numbers);
    $diff = 99999999;
    
    for($i=0; $i < count($numbers)-2;$i++)
    {
        if(($numbers[$i+1] - $numbers[$i]) < $diff)
        {
            $diff = $numbers[$i+1] - $numbers[$i];
        }
    }
    
    for($i=0;$i<count($numbers)-1;$i++)
    {
        if($numbers[$i+1] - $numbers[$i] == $diff)
        {
            print($numbers[$i]." ".$numbers[$i+1]."\n");
        }
    }
}
