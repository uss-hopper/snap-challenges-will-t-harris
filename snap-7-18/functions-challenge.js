function weightToGrams(weight, abbreviation) {
	if(abbreviation === 'lbs') {
		return (weight * 453.5924) + ' grams';
	}

	if(abbreviation === 'oz') {
		return (weight * 38.34952) + ' grams';
	}

	if(abbreviation === 'kg') {
		return (weight * 1000) + ' grams';
	}

	if(abbreviation === 'g') {
		return weight + ' grams';
	}

	if(abbreviation === 'mg') {
		return (weight * .001) + ' grams';
	}
}


function findSumOfPositiveFactors(num) {
	for(let i = 0; i < num; i++) {
		let sum = 0;
		if(num % i === 0) {
			sum += i;
		}
		return sum;
	}
}