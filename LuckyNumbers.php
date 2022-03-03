<?php

$arr = [2,2,2,3,3];
$arrNum = array_count_values($arr);
$luckyNumbers = [];
foreach($arrNum as $key=>$value)
{
    if($key == $value)
    {
        $luckyNumbers[] = $value;
    }
}

if(count($luckyNumbers)>0)
{
    echo max($luckyNumbers);
}
else
{
    echo -1;
}
