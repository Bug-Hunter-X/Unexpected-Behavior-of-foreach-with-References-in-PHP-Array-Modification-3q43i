# PHP Foreach with References Bug
This repository demonstrates a subtle bug related to using references in `foreach` loops when modifying PHP arrays.

The `bug.php` file contains code that intends to increment all values in an array. However, this code doesn't behave as expected when the array contains non-numeric values.  Only numeric values are incremented.

The `bugSolution.php` provides a solution to handle this situation correctly and increment all numeric values within the array gracefully.