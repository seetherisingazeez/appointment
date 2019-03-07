<?php include "../layouts/header.php";

if (isset($_POST['submit'])) {
	require "../databases/config.php";

	try {
		$connection = new PDO($dsn, $username, $password, $options);
		// insert new user code will go here
		$new_user = array(
	"firstname" => $_POST['firstname'],
	"lastname"  => $_POST['lastname'],
	"email"     => $_POST['email'],
	"password" => $_POST['password'],
	"address"  => $_POST['address']
);

$sql = sprintf(
		"INSERT INTO %s (%s) values (%s)",
		"users",
		implode(", ", array_keys($new_user)),
		":" . implode(", :", array_keys($new_user))
);

$statement = $connection->prepare($sql);
$statement->execute($new_user);

	} catch(PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
	}
	
} 

?>
<title>APPOINTMENTS</title>
<form method="post">
	
	<label for="firstname">First Name</label>
	<input type="text" name="firstname" id="firstname">

	<label for="lastname">Last Name</label>
	<input type="text" name="lastname" id="lastname">

	<label for="email">Email Address</label>
	<input type="text" name="email" id="email">

	<label for="password">password</label>
	<input type="password" name="password" id="email">

	<label for="address">Premanent Address</label>
	<input type="text" name="" id="address">

	<input type="submit" name="submit" value="Submit">
</form>