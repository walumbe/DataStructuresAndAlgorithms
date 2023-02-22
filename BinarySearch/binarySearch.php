<?php

function binarySearch($arr, $x)
{
    // Initialize the start and end indices
    $start = 0;
    $end = count($arr) - 1;
  
    // Loop until the start index is less than or equal to the end index
    while ($start <= $end) {
  
        // Calculate the middle index
        $mid = floor(($start + $end) / 2);
  
        // If the middle element is the target, return its index
        if ($arr[$mid] == $x)
            return $mid;
  
        // If the target is greater than the middle element, search the right half of the array
        if ($arr[$mid] < $x)
            $start = $mid + 1;
  
        // Otherwise, search the left half of the array
        else
            $end = $mid - 1;
    }
  
    // If the target is not found, return -1
    return -1;
}
?>