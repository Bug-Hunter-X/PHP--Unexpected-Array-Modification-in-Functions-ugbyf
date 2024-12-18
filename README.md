# PHP: Unexpected Array Modification in Functions

This repository demonstrates a common pitfall in PHP involving array handling and unexpected side effects in function calls.

The `bug.php` file shows how a function may appear to return a modified array, but it actually alters the original array in place due to PHP's pass-by-reference behavior for arrays.

The `bugSolution.php` file illustrates how to avoid this issue by explicitly creating a copy of the array before modifying it.

This is a subtle bug that can lead to difficult-to-debug errors.