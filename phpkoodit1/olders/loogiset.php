<!DOCTYPE html>
<html>
<body>

<form action="check_even.php" method="post">

Enter first number: <input type="text" name="num1"><br>
Enter second number: <input type="text" name="num2"><br>

<input type="submit">

</form>

</body>
</html>

<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if ($num1 % 2 == 0 && $num2 % 2 == 0) {
  echo "Kummatkin olivat tasan";
} else {
  echo "Eivät olleet tasan";
}

?>
