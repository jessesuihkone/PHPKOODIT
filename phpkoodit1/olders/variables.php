<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>

<form method="GET">
    <input type="number" name="person">
    <button>SUBMIT<button>
        <?php
        $name = $_GET['person'];
        echo $name. rand(1, 10);
        ?>
</form>

</body>
</html>