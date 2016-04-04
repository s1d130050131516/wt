<!DOCTYPE html>
<html>
<head>
	<title>Disaster Volunteer Management System</title>
	<style>
		.container {
			width: 80%;
			max-width: 600px;
			margin: 20px auto;
		}
	</style>
</head>
<body>
	<div class="container">
		
		<h1>Welcome to <a href="http://localhost/wt/12">Disaster Volunteer Management System</a></h1>

		<h3>
			Edit Profile
		</h3>

		<form action="edit.php" id="editForm" method="post">
			<table>
				<tr>
					<td style="text-align: right;">
						<label for="name">Name: </label>
					</td>
					<td>
						<input type="text" name="name" id="name" value="<?php echo $u['name'] ?>">
					</td>
				</tr>
				<tr>
					<td style="text-align: right;">
						<label for="email">Email: </label>
					</td>
					<td>
						<input type="email" name="email" id="email" value="<?php echo $u['email'] ?>">
					</td>
				</tr>
				<tr>
					<td style="text-align: right;">
						<label for="phone">Phone: </label>
					</td>
					<td>
						<input type="number" name="phone" id="phone" maxlength="10" value="<?php echo $u['phone'] ?>">
					</td>
				</tr>
				<tr>
					<td style="text-align: right;">
						<label for="birthday">City: </label>
					</td>
					<td>
						<input type="text" name="city" id="city" value="<?php echo $u['city'] ?>">
					</td>
				</tr>
				<tr>
					<td style="text-align: right;">
						<label for="birthday">Birthday: </label>
					</td>
					<td>
						<input type="text" placeholder="DD/MM/YYYY" name="birthday" id="birthday" value="<?php echo $u['birthday'] ?>">
					</td>
				</tr>
				<tr>
					<td style="text-align: right;">
						<label for="pincode">Pincode: </label>
					</td>
					<td>
						<input type="number" name="pincode" id="pincode" maxlength="6" value="<?php echo $u['pincode'] ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button type="submit" id="submit">Update</button>	
					</td>
				</tr>
			</table>
		</form>
	</div>


	<script>
		
		var form = document.getElementById('editForm');
		form.addEventListener('submit', function (e) {
			var safe = false;

			var name = document.getElementById('name').value;
			var phone = document.getElementById('phone').value;
			var email = document.getElementById('email').value;
			var city = document.getElementById('city').value;
			var birthday = document.getElementById('birthday').value;
			var pincode = document.getElementById('pincode').value;

			if (!/^[a-z][a-z\s]*$/i.test(name)) {
					alert('Name must not be blank and must contain only alphabets!');
			} else if (!/^[0-9]{10}$/.test(phone)) {
				alert('Phone number must be numeric and 10 characters long!');
			} else if (!/^[a-z0-9]+\@[a-z0-9]+\.[a-z0-9]{2,3}$/i.test(email)) {
				alert('Email must be in the format: abc@xyz.com');
			} else if (!/^[a-z0-9]+$/i.test(city)) {
				alert('Please enter a city!');
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

	</script>
</body>
</html>