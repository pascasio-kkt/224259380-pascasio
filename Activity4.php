<?php
echo "Loop Control with break and continue\n";
for ($i = 1; $i <= 10; $i++) {
    if ($i === 5) {
        continue;
    }

    if ($i === 9) {
        break;
    }
    echo $i . " ";
}

?>
