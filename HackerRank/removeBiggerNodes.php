<?php
/*
 * Complete the 'removeNodes' function below.
 *
 * The function is expected to return an INTEGER_SINGLY_LINKED_LIST.
 * The function accepts following parameters:
 *  1. INTEGER_SINGLY_LINKED_LIST listHead
 *  2. INTEGER x
 */

/*
 * For your reference:
 *
 * SinglyLinkedListNode {
 *     int data;
 *     SinglyLinkedListNode next;
 * }
 *
 */

function removeNodes($listHead, $x) {
    // Write your code here 
    $aux = $listHead;
   
    while($listHead->data > $x)
    {
        $listHead = $listHead->next;
    }
    
    while($aux->next != NULL)
    {
        if($aux->next->data > $x)
        {
            $aux->next = $aux->next->next;
        }   
        else
        {
            $aux = $aux->next;
        }  
    }
    
    return $listHead;
}
