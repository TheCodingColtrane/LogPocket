<!DOCTYPE html>
<html>
<body>

<form method = "post" action="#teste">
First name: <input type="text" name="FirstName"><br>
Last name: <input type="text" name="LastName" value="Mouse"><br>
<input type="submit" value="Submit">
</form>

<form name = "teste" method="post" action="submit">

<?php 
$nome = $_POST['FirstName'];
if (isset($_POST['FirstName']))
{
	echo $_POST['FirstName'];
}

else 
{
	echo "";
}
 ?>
 
</form>

</body>
</html>

