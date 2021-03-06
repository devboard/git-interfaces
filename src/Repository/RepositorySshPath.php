<?php

declare(strict_types=1);

namespace Git\Repository;

interface RepositorySshPath extends RepositoryPath
{
    public function asString(): string;
}
