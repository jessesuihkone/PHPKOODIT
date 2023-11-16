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
        if ($number > 5) {
          echo "Numero on suurempi";
        } else {
          echo "Numero on pienempi";
        }
      }
    ?>
  </body>
</html>
