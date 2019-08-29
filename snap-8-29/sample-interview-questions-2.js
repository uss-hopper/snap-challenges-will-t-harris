# 1 - In pseudocode, write a function that takes a string and returns it with all vowels _(not including y)_ removed.

function removeVowels(string) {
    const result = '';
    const sentenceArray = string.split('');
    sentenceArray.map(character => {
        if(character.toLowerCase() !== ('a' || 'e' || 'i' || 'o' || 'u') {
            result += character;
        }
        return result;
    });
}