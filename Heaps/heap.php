<?php 
class MinHeap extends SplHeap {
  public function compare($value1, $value2) {
    return $value1 - $value2;
  }
}

$heap = new MinHeap();
$heap->insert(4);
$heap->insert(1);
$heap->insert(3);
$heap->insert(2);

echo $heap->extract(); // Output: 1
echo $heap->extract(); // Output: 2
echo $heap->extract(); // Output: 3
echo $heap->extract(); // Output: 4
