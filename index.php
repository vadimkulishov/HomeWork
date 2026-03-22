<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $dollar = 81.2;
    $ruble = 0.07;

    $dollars = 500;

    $rubels = $dollars * $dollar;
    $yuans = $rubels * $ruble;

    echo "1.000 USD = ";
    echo $yuans;
    echo " CNY";
    ?>
</body>
</html>