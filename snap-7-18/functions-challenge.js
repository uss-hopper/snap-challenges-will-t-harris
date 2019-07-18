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
