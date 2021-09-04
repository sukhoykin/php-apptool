<?php

declare(strict_types=1);

namespace Sukhoykin\App\Interfaces;

use Sukhoykin\App\Console\Arguments;

interface Executable
{
    function getUsage(): string;
    function getDescription(): string;
    function execute(Arguments $arguments): int;
}
