function foo(a, b) {
  if (a === null || b === null) {
    return null; //This is where the bug may occur
  }
  return a + b;
}

//Example usage
console.log(foo(1,2)); //Output: 3
console.log(foo(null, 2));//Output: null
console.log(foo(1, null));//Output: null
console.log(foo(null, null));//Output: null