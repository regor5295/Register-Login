<!DOCTYPE html>
<html ng-app="MyApp">
<head>
	<title></title>
	  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div ng-controller="MyController">
	<h2>REGISTER</h2><hr>
		<form>
			Create Username: <input type="text" name="uname" ng-model="uname" required><br><br>
			Create Password: <input type="password" name="upass" ng-model="upass" required><br><br>
			First Name: <input type="text" name="fname" ng-model="fname" required><br><br>
			Middle Name: <input type="text" name="mname" ng-model="mname" required><br><br>
			Last Name: <input type="text" name="lname" ng-model="lname" required><br><br>
			Gender: <select name="gender" ng-model="gender">
					<option value="M">M</option>
					<option value="F">F</option>
					</select><br><br>
			Birthday: <input type="text" name="bday" ng-model="bday" required><br><br>
			<button type="submit" ng-click="connect()">Done</button>
		</form><hr><hr>

	<h2>LOG-IN</h2><hr>
		<form>
			Username: <input type="text" name="uname" ng-model="uname" required><br><br>
			Password: <input type="password" name="upass" ng-model="upass" required><br><br>
			<button type="submit" ng-click="login()">Log-in</button>
		</form><hr><hr>

	<h2>Users:</h2><hr>
	<li ng-init="users()">
			<table>
				<tr><th>User ID</th><th>Username</th><th>Password</th><th>First Name</th><th>Middle Name</th>
					<th>Last Name</th><th>Gender</th><th>Birthday</th></tr>
				<tr ng-repeat = "user in users">
				<td>{{ user.user_id  }}</td>
				<td>{{ user.uname }}</td>
				<td>{{ user.upass }}</td>
				<td>{{ user.fname }}</td>
				<td>{{ user.mname }}</td>
				<td>{{ user.lname }}</td>
				<td>{{ user.gender }}</td>
				<td>{{ user.bday }}</td>
			</tr>
			</table>
	</li>
	<br><br><br><br><br>
	<button type="log-out" ng-click="logout()">Log-out</button><hr>

</div>
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
</body>
</html>
