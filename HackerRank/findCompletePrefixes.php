<?php

/*
 * Complete the 'findCompletePrefixes' function below.
 *
 * The function is expected to return an INTEGER_ARRAY that represents the occurrences of each query.
 * The function accepts following parameters:
 *  1. STRING_ARRAY names
 *  2. STRING_ARRAY query
 */

function findCompletePrefixes($names, $query) {
    $qtt = [];
    foreach($query as $q)
    {
        $countN = 0;
        $lenQ = strlen($q);
        foreach($names as $name)
        {
            if(substr($name,0,$lenQ) === $q && strlen($name)>$lenQ)
            {
                $countN += 1;
            }
        }
        $qtt[] = $countN;
    }
    return $qtt;
}
