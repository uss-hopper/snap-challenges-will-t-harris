#In pseudocode, write a function that takes a string and returns it with all vowels (not including y) removed.

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