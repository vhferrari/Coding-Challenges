<?php
class FileOwners
{
    public static function groupByOwners($files)
    {
        $group = [];
        $uniqueValues = array_unique(array_values ($files));

        foreach( $files as $key => $value ){
            foreach($uniqueValues as $val){
                if($val==$value){
                    $group[$val][] = $key; 
                }
            }
        }

        return $group;
    }
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(FileOwners::groupByOwners($files));
