<?php

declare(strict_types = 1);

namespace Core;

class Flash
{
    public function push(string $key, string $value): void
    {
        $_SESSION["flash_{$key}"] = $value;
    }

    public function get(string $key): ?string
    {
        $value = $_SESSION["flash_{$key}"] ?? null;
        unset($_SESSION["flash_{$key}"]);

        return $value;
    }
}
