<?php
/*
Rotate to the right an array $k times

Example 1:
Input: $nums = [1,2,3,4,5,6,7], $k = 2 
Output: [6,7,1,2,3,4,5]

Example 2:
Input: $nums = [1,2,3,4,5,6,7], $k = 3 
Output: [5,6,7,1,2,3,4]

Example 3:
Input: $nums = [1,2,3,4,5,6,7], $k = 5 
Output: [3,4,5,6,7,1,2]
*/

function rotateRightArray($nums,$k)
{
  $size = count($nums)-1; 
  
  for($i=0;$i!=$k;$i++)
  {
      $val = $nums[$size];
      array_pop($nums);
      array_unshift($nums,$val);
  }

  return $nums;
}
