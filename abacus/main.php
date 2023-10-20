<?php

declare(strict_types=1);

include "functions.php";

$abacus = drawAbacus();

var_dump($abacus);

echo(readAbacus($abacus));