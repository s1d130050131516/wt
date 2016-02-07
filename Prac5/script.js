var choice;

do {
	choice = prompt("What operation do you want to perform?\n1. Add\n2. Subtract\n3. Multiply\n4. Divide\n5. Modulo");
	choice = parseInt(choice);
} while (choice < 1 || choice > 5);

var a = prompt("What's the first digit?");
var b= prompt("What's the second digit?");

choice = parseInt(choice);
a = parseInt(a);
b = parseInt(b);

var ans = 0;
switch (choice) {
	case 1:
		ans = a + b; break;
	case 2:
		ans = a - b; break;
	case 3:
		ans = a * b; break;
	case 4:
		ans = a / b; break;
	case 5:
		ans = a % b; break;
}

alert("The answer is: " + ans);