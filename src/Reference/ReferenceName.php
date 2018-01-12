<?php

declare(strict_types=1);

namespace Git\Reference;

interface ReferenceName
{
    public function getValue(): string;

    public function __toString(): string;

    public function getType(): string;

    public function serialize(): string;

    public static function deserialize(string $name);
}
