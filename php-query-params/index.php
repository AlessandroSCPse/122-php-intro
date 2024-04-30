<?php
// variabili col nome
$name = $_GET['firstname'];
$lastname = $_GET['lastname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ciao mi chiamo <?php echo $name . ' ' . $lastname; ?></h1>
</body>
</html>
