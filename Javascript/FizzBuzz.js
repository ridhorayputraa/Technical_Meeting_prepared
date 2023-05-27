// ketika di angka 3 Fizz
// ketika di angka 5 Buzz
// Ketika 3 dan 2 adalah FizzBuzz

for (let i = 1; i <= 100; i++) {
  let char = '';
  if (i % 3 === 0 && i % 5 === 0) {
    // Jika i habisa dibagi 3 dan 5 kan 15 berarti 15 = fizzbuzz
    console.log(`${char}FizzBuzz`);
  } else if (i % 3 === 0) {
    // Jika i(3) dibagi 3 = 0 gak? kalo true 'fizz'
    console.log(`${char}Fizz`);
  } else if (i % 5 === 0) {
    console.log(`${char}Buzz`);
  } else {
    console.log(i);
  }
}
