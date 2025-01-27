function foo(a, b) {
  // Handle null values gracefully
  $a = is_null($a) ? 0 : $a;
  $b = is_null($b) ? 0 : $b;

  return $a + $b; 
}

//Example usage
console.log(foo(1,2)); //Output: 3
console.log(foo(null, 2));//Output: 2
console.log(foo(1, null));//Output: 1
console.log(foo(null, null));//Output: 0