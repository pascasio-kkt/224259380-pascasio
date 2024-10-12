<?php
echo " Password Validator\n";
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