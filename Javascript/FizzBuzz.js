// ketika bsia dibago 3 Fizz
// ketika ketika bisa di bagi  5 Buzz
// Ketika 3 dan 5 adalah FizzBuzz => 15

function FizzBuzz(number) {
  for (let i = 1; i <= number; i++) {
    if (i % 3 === 0 && i % 5 === 0) {
      console.log("FizzBuzz");
    } else if (i % 3 === 0) {
      console.log("Fizzz");
    } else if (i % 5 === 0) {
      console.log("Buzzz");
    } else {
      console.log(i);
    }
  }
}

function reversString(char) {
  const Arr = [char];
  // Split ngebalikin array
  console.log(char.split("").reverse());
}

// FizzBuzz(100);
// reversString("Ridhoo");

// 3.) mengambil Sort dari yang terbesar
function largestNumber(...number) {
  // console.log(number);

  number.sort((a, b) => a - b);
  return console.log(number);
}

// 4.) Palindrome => kodok = kodok true || api = ipa false
function palindrome(currentChar) {
  let char = [...currentChar].join();

  let reverseChar = [...currentChar].reverse().join();
  if (char !== reverseChar) {
    return false;
  }
  return true;
  // return char === reverseChar
}

console.log(palindrome("ridho"));
console.log(palindrome("apa"));
console.log(palindrome("kodok"));
console.log(palindrome("api"));

function sorting(int) {
  for (let i = 1; (i = int); i++) {}
}

// largestNumber(1, 2, 3, 9, 4, 32, 5, 6, 7, 8, 9, 10, 12, 110);
// largestNumber('ridho')

// 5.) Fibonnaci sequence
function fibonnaciSequence(number){

}

