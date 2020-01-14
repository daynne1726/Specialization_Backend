<?php
$x = array(1, 2, 3, 4, 5);

// Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
unset($x[1]);
$x = array_values($x);
print_r($x);
?>