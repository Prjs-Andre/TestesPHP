<?php 

for ($count = 1; $count <= 100; $count += 2) {
    echo $count . PHP_EOL;
}

for ($count = 1; $count <= 100; $count++) {
    if ($count % 2 == 1) {
        echo $count . PHP_EOL;
    }
}