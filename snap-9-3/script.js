const nameArray = ['Bob', 'Jim', 'Matt', 'Mary', 'Suzy', ' Sarah'];

nameArray.map(name => {
	const newParagraph = document.createElement('p');
	const newParagraphContent = document.createTextNode(name);

	newParagraph.appendChild(newParagraphContent);
});