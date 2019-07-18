function convertWeightToGrams(weight, abbreviation) {
	if(abbreviation === 'lbs') {
		return (weight * 453.59237) + ' grams';
	} else if(abbreviation === 'oz') {
		return (weight * 28.34952) + ' grams';
	} else if(abbreviation === 'kg') {
		return (weight * 1000) + ' grams';
	} else if(abbreviation === 'mg') {
		return (weight * .001) + ' grams';
	} else if(abbreviation === 'g') {
		return weight + ' grams';
	}
}


function findSumOfPositiveFactors(num) {
	let sum = 0;
	for(let i = 0; i <= num; i++) {
		if(num % i === 0) {
			sum += i;
		}
	}
	return sum;
}