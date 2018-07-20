<?php

declare(strict_types=1);

namespace Git\Repository;

interface RepositoryPath
{
    public function asString(): string;
}
