const sentence = "Ensign Babyface! Your shields were failing, sir. This should be interesting. Your head is not an artifact! What's a knock-out like you doing in a computer-generated gin joint like this? Why don't we just give everybody a promotion and call it a night - 'Commander'? But the probability of making a six is no greater than that of rolling a seven. What? We're not at all alike! I recommend you don't fire until you're within 40,000 kilometers. Wouldn't that bring about chaos? Flair is what marks the difference between artistry and mere competence.";

const sentenceArray = sentence.split(" ");

let result = sentenceArray.filter(word => {
	return ((word[0] === 'E' || word[0] === 'e') === false);
});
resultSentence = result.join(' ');
console.log(resultSentence);