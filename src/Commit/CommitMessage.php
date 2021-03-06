<?php

declare(strict_types=1);

namespace Git\Commit;

interface CommitMessage
{
    public function asString(): string;
}
