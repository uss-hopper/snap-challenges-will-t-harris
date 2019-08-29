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