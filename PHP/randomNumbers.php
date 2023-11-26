<?php
    // Generating 5 random numbers between 1 and 100
    for ($i = 1; $i <= 5; $i++) {
        $randomNumber = rand(1, 100);
        echo "Random Number $i: $randomNumber<br>";
    }
?>