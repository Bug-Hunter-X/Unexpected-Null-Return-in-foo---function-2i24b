# Unexpected Null Return in foo() Function

This repository demonstrates a common bug in PHP where a function returns null when it encounters null parameters.  The `foo()` function is designed to add two numbers, but it unexpectedly returns null if either input is null. This can lead to unexpected behavior in applications relying on the function's output.

The `bug.php` file contains the buggy implementation. The solution is provided in `bugSolution.php` which shows a more robust way to handle null values, providing more predictable and reliable results.