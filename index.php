<?php

declare(strict_types=1);

function getCornersCount(string ...$shapeName): string
{
    $cornerStorage = [
        'square'   => 4,
        'circle'   => 0,
        'triangle' => 3,
    ];

    $result = '';

    foreach ($shapeName as $shape) {
        if (!array_key_exists($shape, $cornerStorage)) {
            $result .= sprintf('%s - not defined ', $shape);
            continue;
        }

        $cornerValue  = $cornerStorage[$shape];
        $result .= sprintf('%s - %d %s', $shape, $cornerValue, PHP_EOL);
    }

    return $result;
}

echo getCornersCount('square', 'circle', 'triangle', 'hexagonal');