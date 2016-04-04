var form = document.getElementById('registrationForm');
form.addEventListener('submit', function (e) {
	var safe = false;

	var name = document.getElementById('name').value;
	var password = document.getElementById('password').value;
	var phone = document.getElementById('phone').value;
	var email = document.getElementById('email').value;
	var birthday = document.getElementById('birthday').value;
	var pincode = document.getElementById('pincode').value;

	if (!/^[a-z][a-z\s]*$/i.test(name)) {
			alert('Name must not be blank and must contain only alphabets!');
	} else if (!/^[A-Z].{7,11}$/.test(password)) {
	 	alert('Password must have 8 to 12 characters and must begin with an uppercase alphabet!');
	} else if (!/^[0-9]{10}$/.test(phone)) {
		alert('Phone number must be numeric and 10 characters long!');
	} else if (!/^[a-z0-9]+\@[a-z0-9]+\.[a-z0-9]{2,3}$/i.test(email)) {
		alert('Email must be in the format: abc@xyz.com');
	} else if (!/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/i.test(birthday)) {
		alert('Birthday must be in the format: DD/MM/YYYY');
	} else if (!/^[0-9]{6}$/.test(pincode)) {
		alert('Pincode must be numeric and 6 characters long!');
	} else {
		safe = true;
	}

	if (!safe) {
		e.preventDefault();
	}
});