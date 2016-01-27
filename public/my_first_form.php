<?php
var_dump($_GET);
var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="uft-8">
	<link rel="stylesheet" href="/css/site.css">
	<title>form</title>
</head>
<body>
	<h2>User Login</h2>
	<form method="POST" action="/my_first_form.php">
		<p>
			<label for="username">Username</label>
			<input id="username" name="username" type="text" placeholder="Username">
		</p>
		<p>
			<label for="password">Password</label>
			<input id="password" name="password" type="password" placeholder="Password">
		</p>
		<p>
			<button type="submit">Login</button>
		</p>

	</form>

	<h2>Compose an email</h2>

	<form method="POST" action="/my_first_form.php">
		<p>
			<input type="text" id="to" name="to" value="" placeholder="to">
		</p>
		<p>
			<input type="text" id="from" name="from" value="" placeholder="from">
		</p>

		<p>
			<input type="text" id="subject" name="subject" value="" placeholder="subject">
		</p>

		<p>
			<textarea id="email_body" name="email_body" rows="5" cols="40">Body</textarea>

		</p>

		<input type="checkbox" id="mailcopy" name="mailcopy" value="yes" checked>
		<label for="mailcopy">Save a copy to your sent folder?</label>


		<p>
			<button type="submit">send</button>
		</p>
	</form>

	<h2>Multiple Choice Test</h2>

	<form>

		<p>What is the county of San antonio Texas?</p>
		<label>
			<input type="radio" name="q1" value="bexar">
			Bexar
		</label>

		<label>
			<input type="radio" name="q1" value="travis">
			Travis
		</label>

		<label>
			<input type="radio" name="q1" value="guadalupe">
			Guadalupe
		</label>

		<label>
			<input type="radio" name="q1" value="none">
			None of the above
		</label>
		<button type="submit">submit</button>
	</form>
	<br>

	<p>What is the current year?</p>
	<form>

		<label>
			<input type="radio" name="q1" value="2010">
			2010
		</label>

		<label>
			<input type="radio" name="q1" value="2000">
			2000
		</label>

		<label>
			<input type="radio" name="q1" value="1995">
			1995
		</label>

		<label>
			<input type="radio" name="q1" value="2016">
			2016
		</label>
		<button type="submit">submit</button>

		<br>
		<br>

		<label for="os">How many days are in a week? </label>
		<select id="os" name="days[]" multiple>
			<br>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>

		</select>
		<button type="submit">submit</button>
	</form>

	<br>



	<h2>Select Testing</h2>
	<form>

		<label for="os">Do you use Windows? </label>
		<select id="os" name="os">
			<option value="1">Yes</option>
			<option value="2" >No</option>
		</select>

		<button type="submit">submit</button>
	</form>
</body>
</html>