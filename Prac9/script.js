var first, second;

window.onload = function () {
	first = document.getElementById('first');
	second = document.getElementById('second');
}

function calculate () {
	var firstValue = first.value,
		secondValue = second.value;
	var arr = firstValue.split(' ');
	if (arr.length != 3) {
		second.value = 'Invalid format';
		return;
	} else {
		second.value = '';
	}

	var exp = arr[1],
		op1 = parseInt(arr[0]),
		op2 = parseInt(arr[2]);
	var stringToSet = '';
	switch (exp) {
		case '+':
			stringToSet = op1 + op2;
			break;
		case '-':
			stringToSet = op1 - op2;
			break;
		case '*':
			stringToSet = op1 * op2;
			break;
		case '/':
			stringToSet = op1 / op2;
			break;
		case '%':
			stringToSet = op1 % op2;
			break;
		default:
			stringToSet = 'Invalid operator!';
	}
	second.value = stringToSet;
}