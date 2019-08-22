const numArray = [1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, 6765, 10946, 17711, 28657, 46368, 75025, 121393, 196418, 317811];

const reducer = (accumulator, currentValue) => accumulator + currentValue;

const numArraySum = numArray.reduce(reducer);
console.log(numArraySum);