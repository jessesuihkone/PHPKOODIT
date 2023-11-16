<!DOCTYPE>
<html>
<body>

<form action="karkausvuosi.php" method="post">
vuosi: <input type="text" name="year"><br>
<input type="submit" value="Submit">
</form>
<?php
if (isset($_POST['year'])) {
  $year = $_POST['year'];
  if (preg_match('/^[0-9]{4}$/', $year)) {
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
      echo "$year on karkausvuosi.";
    } else {
      echo "$year ei ole karkausvuosi.";
    }
  } else {
    echo "Virheellinen vuosi.";
  }
} else {
  echo "kirjoita vuosi.";
}
?>

</body>

</html>
