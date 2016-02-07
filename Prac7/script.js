window.onload = function () {

	var op1 = document.getElementById('operand1'),
		op2 = document.getElementById('operand2'),
		answer = document.getElementById('answer'),
		add = document.getElementById('add'),
		subtract = document.getElementById('subtract'),
		multiply = document.getElementById('multiply'),
		divide = document.getElementById('divide');

	function getValues () {
		if (op1.value.length == 0 || op2.value.length == 0) return null;
		return [parseInt(op1.value), parseInt(op2.value)];
	}

	function setAnswer (n) {
		answer.innerHTML = 'The answer is: ' + n;
	}

	add.addEventListener('click', function (e) {
		var op = getValues();
		if (op !== null)
			setAnswer(op[0] + op[1]);
	})

	subtract.addEventListener('click', function (e) {
		var op = getValues();
		if (op !== null)
			setAnswer(op[0] - op[1]);
	});

	multiply.addEventListener('click', function (e) {
		var op = getValues();
		if (op !== null)
			setAnswer(op[0] * op[1]);
	});

	divide.addEventListener('click', function (e) {
		var op = getValues();
		if (op !== null)
			setAnswer(op[0] / op[1]);
	});
}