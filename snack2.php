<?php
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
$message = "";
if (!empty($name) && !empty($mail) && !empty($age)){
    if (strlen($name) > 3 && strpos($mail, "@") !== false && strpos($mail, ".") !== false && is_numeric($age)) {
        $message = "Accesso riuscito";
    } else {
        $message = "Accesso negato";
    }
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>

<body>
    <div class="result">
        <h1><?php echo $message; ?></h1>
    </div>

</body>

</html>