const nameArray = ['Bob', 'Jim', 'Matt', 'Mary', 'Suzy', ' Sarah'];

 const result = nameArray.map(name => {
	const newParagraph = document.createElement('p');
	const newParagraphContent = document.createTextNode(name);

	newParagraph.appendChild(newParagraphContent);

	const currentElement = document.getElementById('header');
	currentElement.insertAdjacentElement('afterend', newParagraph);
});
