<?php
/*
 * Complete the 'matchingBraces' function below.
 *
 * The function is expected to return a STRING_ARRAY.
 * The function accepts STRING_ARRAY braces as parameter.
 */

function matchingBraces($braces) {
    // Write your code here
    $result = [];
    foreach($braces as $brace)
    {
        $pil = [];
        for($i=0;$i<strlen($brace);$i++)
        {
            $count = count($pil)-1;
            if($brace[$i]=='(' || $brace[$i] == '[' || $brace[$i] == '{')
            {
                $pil[] = $brace[$i];
                continue;
            }
            
            if(count($pil)==0)
            {
                $result[] = 'NO';
                continue 2;
            }
            
            if($brace[$i]==')')
            {
                $aux=$pil[$count];
                array_pop($pil);
                if($aux=='[' || $aux=='{')
                {
                    $result[] = 'NO';
                    continue 2;
                }
            }
            elseif($brace[$i]==']')
            {
                $aux=$pil[$count];
                array_pop($pil);
                if($aux=='(' || $aux=='{')
                {
                    $result[] = 'NO';
                    continue 2;
                }
            }
            elseif($brace[$i]=='}')
            {
                $aux=$pil[$count];
                array_pop($pil);
                if($aux=='[' || $aux=='(')
                {
                    $result[] = 'NO';
                    continue 2;
                }
            }
        }
        
        if(count($pil)==0)
        {
            $result[] = 'YES';
        }
        else
        {
            $result[] = 'NO';
        } 
    }
    
    return $result;
}
