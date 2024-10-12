<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
 <?php
$n = 7;

for ($i = 1; $i <= 10; $i++) {
    $result = $n * $i;
    echo "$n x $i = $result\n";
}
?>
</body>
</html>