// 1 - In pseudocode, write a function that takes a string and returns it with all vowels _(not including y)_ removed.

function removeVowels(string) {
    let result = '';
    const sentenceArray = string.split('');
    sentenceArray.map(character => {
        if(character.toLowerCase() !== ('a' || 'e' || 'i' || 'o' || 'u')) {
            result += character;
        }
        return result;
    });
}

// 2 - In pseudocode, write a function that takes an array of numbers and returns the greatest number in the array.

function returnGreatestNumber(array) {
    let greatestNumber = 0;
    array.map(number => {
        if(number > greatestNumber) {
            greatestNumber = number;
        }
        return greatestNumber;
    })
}

// 3 - In pseudocode, write a function that computes the first 100 numbers in the Fibonacci sequence. The Fibonacci sequence is created by adding the two previous numbers in the sequence together, and starts 1, 1, 2, 3, 5, 8...

function computeFirst100Fibonacci() {
    const answerArrayWithSequenceStart = [1, 1];
    for(let i = 2; i <= 100; i++) {
        answerArrayWithSequenceStart[i] = answerArrayWithSequenceStart[i - 1] + answerArrayWithSequenceStart[i - 2];
    }
    return answerArrayWithSequenceStart;
}