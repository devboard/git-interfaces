<?php

declare(strict_types=1);

namespace Git\Commit;

interface CommitSha
{
    public function asString(): string;
}
