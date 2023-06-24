<?php

require __DIR__ . "/../../vendor/autoload.php";

function snowman(SnowmanInterface $snowman)
{
    $snowman->drawHead(1, 1);
    $snowman->drawBody(1, 2);
}

$typeSnowman = 'red';
// мы выбираем тип семейства в начале кода
if ('red' === $typeSnowman) {
    $snowman = new RedSnowman();
} else {
    $snowman = new WhiteSnowman();
}

snowman($snowman);
