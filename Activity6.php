<?php
echo "Array Iteration with foreach\n\n";

$faveMovies = [
    "The Shawshank Redemption",
    "Inception",
    "The Dark Knight",
    "Interstellar",
    "Parasite",
];

foreach ($faveMovies as $i => $movie) {
    echo ($i + 1) . ". " . $movie . "\n";
}
?>