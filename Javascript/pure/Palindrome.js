function isPalindrome(word) {
  // Menghapus spasi dan mengubah semua huruf menjadi huruf kecil
  var formattedWord = word.toLowerCase().replace(/\s/g, '');

  var length = formattedWord.length;
  for (var i = 0; i < length / 2; i++) {
    if (formattedWord[i] !== formattedWord[length - 1 - i]) {
      return false;
    }
  }
  return true;
}

// Contoh penggunaan
var word1 = "level";
console.log(isPalindrome(word1)); // Output: true

var word2 = "A man a plan a canal Panama";
console.log(isPalindrome(word2)); // Output: true

var word3 = "Hello world";
console.log(isPalindrome(word3)); // Output: false