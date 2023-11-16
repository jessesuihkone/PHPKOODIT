<!DOCTYPE html>
<html>
  <body>
    <form method="POST">
      <label>Enter a number: </label>
      <input type="text" name="number" />
      <input type="submit" value="Submit" />
    </form>

    <?php
      if (isset($_POST['number'])) {
        $number = $_POST['number'];
        if ($number == 5) {
          echo "Numero on viisi";
        } else if ($number < 5) {
          echo "Numero on pienempi";
        } else {
          echo "Numero on suurempi";
        }
      }
    ?>
  </body>
</html>
