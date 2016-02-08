var form;

window.onload = function () {
	form = document.getElementById('myForm');
}

function show () {
	var name = form.name;
	var elements = form.elements.length;
	alert('The form\'s name is: ' + name + '.\nIt has ' + elements + ' elements.');
}