var m, cm;

window.onload = function () {
	m = document.getElementById('meter');
	cm = document.getElementById('centimeter');
}

function convert () {
	var meters = parseFloat(m.value);
	meters *= 100;
	cm.value = meters;
}