<?php
$matches = [
    [
        "TeamHome" => "Pelicans",
        "TeamVisiting" => "Warriors",
        "ScoreHome" => 108,
        "ScoreVisiting" => 123
    ],
    [
        "TeamHome" => "Buls",
        "TeamVisiting" => "Sixers",
        "ScoreHome" => 96,
        "ScoreVisiting" => 106
    ],
    [
        "TeamHome" => "Jazz",
        "TeamVisiting" => "Spurs",
        "ScoreHome" => 110,
        "ScoreVisiting" => 99
    ],
    [
        "TeamHome" => "Pistons",
        "TeamVisiting" => "Magic",
        "ScoreHome" => 112,
        "ScoreVisiting" => 119
    ],
];

$print = "";

for ($i = 0; $i < count($matches); $i++) {
    $print .= "<h2>" . $matches[$i]["TeamHome"] . " - " . $matches[$i]["TeamVisiting"] . " | " . $matches[$i]["ScoreHome"] . " - " . $matches[$i]["ScoreVisiting"] . "</h2>";
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>

<body>
    <h1>NBA-Result</h1>
    <div class="result">
        <?php echo $print; ?>
    </div>

</body>

</html>