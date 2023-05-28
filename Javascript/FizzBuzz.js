// ketika di angka 3 Fizz
// ketika di angka 5 Buzz
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

function largestNumber(number) {
  const arrNumber = [number]
  arrNumber.sort((a, b) => a - b);
}

console.log(largestNumber(1,2,3,4,5,6,7,8,9,10))


