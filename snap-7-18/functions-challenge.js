/**
 * convert a weight to grams
 *
 * @param weight The value being passed in for conversion
 * @param abbreviation The abbreviated weight units
 * @returns string with final converted value
 **/
function convertWeightToGrams(weight, abbreviation) {
	if(abbreviation === 'lbs') {
		return weight * 453.59237;
	} else if(abbreviation === 'oz') {
		return weight * 28.34952;
	} else if(abbreviation === 'kg') {
		return weight * 1000;
	} else if(abbreviation === 'mg') {
		return weight * .001;
	} else if(abbreviation === 'g') {
		return weight;
	} else {
		return `I don't know how to convert that value, please try again.`;
	}
}

/**
 * find the sum of all positive factors of an integer
 *
 * @param num the number being passed in
 * @returns sum the sum of the positive factors found in the loop
 */
function findSumOfPositiveFactors(num) {
	let sum = 0;
	for(let i = 0; i <= num; i++) {
		if(num % i === 0) {
			sum += i;
		}
	}
	return sum;
}