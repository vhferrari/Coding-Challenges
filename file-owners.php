<?php
/*
https://www.testdome.com/questions/php/file-owners/35594

File Owners
Implement a groupByOwners function that:

Accepts an associative array containing the file owner name for each file name.
Returns an associative array containing an array of file names for each owner name, in any order.
For example, for associative array ["Input.txt" => "Randy", "Code.py" => "Stan", "Output.txt" => "Randy"] 
the groupByOwners function should return ["Randy" => ["Input.txt", "Output.txt"], "Stan" => ["Code.py"]]
*/
function groupByOwners(array $files) : array
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

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
var_dump(groupByOwners($files));