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
			Log in
		</h3>

		<form action="login.php" method="post">
			<table>
				<tr>
					<td style="text-align: right;"><label for="email">Email:</label></td>
					<td><input type="email" name="email" id="email"></td>
				</tr>
				<tr>
					<td style="text-align: right;"><label for="password">Password:</label></td>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><button type="submit">Log in</button></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>