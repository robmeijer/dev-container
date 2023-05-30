<?php

declare(strict_types=1);

use App\Example;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$example = new Example();

echo $example->greet('World') . PHP_EOL;
