<?php
	if(isset($_POST['name'], $_POST['age'])) {
		$name = $_POST['name'];
		$age = $_POST['age'];
		echo "You are ".$name.". And your age is ".$age;

	}
?>
<form action = "index.php" method="post">
	<input type="text" name="name" placeholder="Name">
	<input type="text" name="age" placeholder="Age">
	<input type="submit">
</form>