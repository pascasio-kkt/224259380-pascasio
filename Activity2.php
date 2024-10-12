<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Validator</title>
</head>
<body>
<?php
$pass = "password123";
$input = "";

do {
    echo "Please enter the password: ";
    $input = trim(fgets(STDIN));

    If ($input !== $pass) {
        echo "Incorrect password.\n";
    }
} while ($input !== $pass);
echo "Access Granted.\n";
?>
</body>
</html>