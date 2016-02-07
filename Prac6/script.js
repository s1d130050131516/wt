var questions = [
	'Who is the CEO of Tesla Motors?',
	'How many people founded Apple?',
	'Which OS does Microsoft make?',
	'Which is faster: SSD or HDD?',
	'What company does Jeff Bezos own?'
];

var answers = ['Elon Musk', '3', 'Windows', 'SSD', 'Amazon'];

var score = 0, tries = 0, questionIndex = 0;
var input, question, errorDiv, error, attempts;

function skip () {
	questionIndex++;
	if (questionIndex == 5) {
		finish();
		return;
	}
	clr();
	updateTries();
	ask();
}

function ans () {
	if (input.value == answers[questionIndex]) {
		score++;
		questionIndex++;
		if (questionIndex == 5) {
			finish();
			return;
		}
		clr();
		ask();
	} else {
		tries++;
		checkTries();
	}
	updateTries();
}

function ask () {
	question.innerHTML = (questionIndex + 1) + ". " + questions[questionIndex];
}

function clr () {
	input.value = "";
	errorDiv.className = 'hidden';
	tries = 0;
}

function checkTries () {
	if (tries) {
		errorDiv.className = '';
	}
}

function finish () {
	var toDisplay = '<p>You answered ' + score + '/5 questions correctly.</p><ol>';
	for (var i = 0; i < questions.length; i++) {
		toDisplay += '<li>' + questions[i] + '<br />' + answers[i] + '</li>';
	};
	toDisplay += '</ol>';
	document.getElementById('container').innerHTML = toDisplay;
	errorDiv.className = '';
}

function updateTries () {
	attempts.innerHTML = (tries + 1);
}

window.onload = function () {
	input = document.getElementById('answer');
	attempts = document.getElementById('attempts');
	question = document.getElementById('question');
	errorDiv = document.getElementById('errorDiv');
	error = document.getElementById('error');
	ask();
}