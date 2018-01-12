<?php

declare(strict_types=1);

namespace Git;

use Git\Repository\RepositoryPath;

interface Repository
{
    public function getPath(): RepositoryPath;
}
