<?php
function getNumbers()
{
    return [1, 2, 3, 4, 5];
}

foreach (getNumbers() as $num) {
    echo $num . " ";
}

function getIntegers()
{
    yield 1;
    yield 2;
    yield 3;
    yield 4;
    yield 5;
}

foreach (getIntegers() as $num) {
    echo $num . " ";
}

// Generators using loop

function countUp($max)
{
    for ($i = 1; $i <= $max; $i++) {
        yield $i;
    }
}

foreach (countUp(5) as $number) {
    echo $number . " ";
}
