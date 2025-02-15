# PHP Foreach Loop Modification During Iteration

This repository demonstrates a common error in PHP: modifying an array during a foreach loop iteration.  This can lead to unexpected results and skipping elements.  The example shows a function that removes null values from an array. The original code attempts to unset elements directly within the loop, causing skipped elements. The solution provides a correct implementation using a new array for elements to be added to.

## Bug
The `bug.php` file contains the buggy code.

## Solution
The `bugSolution.php` file demonstrates the corrected code.