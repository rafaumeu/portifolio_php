<?php

declare(strict_types = 1);

namespace Core;

class Validator
{
    public array $errors = [];

    public static function make(array $rules, array $data): self
    {
        $validator = new self();

        foreach ($rules as $field => $fieldRules) {
            foreach ($fieldRules as $rule) {
                $fieldValue = $data[$field] ?? null;

                if ($rule === 'confirmed') {
                    $validator->$rule($field, $fieldValue, $data["{$field}_confirm"]);
                } elseif (str_contains($rule, ":")) {
                    [$ruleName, $param] = explode(":", $rule);
                    $validator->$ruleName($param, $field, $fieldValue);
                } else {
                    $validator->$rule($field, $fieldValue);
                }
            }
        }

        return $validator;
    }

    public function passes(): bool
    {
        return empty($this->errors);
    }

    public function fails(): bool
    {
        return ! empty($this->errors);
    }

    private function required(string $field, mixed $value): void
    {
        if (empty($value) && $value !== '0') {
            $this->addError($field, "O campo {$field} é obrigatório");
        }
    }

    private function email(string $field, mixed $value): void
    {
        if (! filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->addError($field, "O campo {$field} deve ser um email válido");
        }
    }

    private function min(string $min, string $field, mixed $value): void
    {
        if (strlen(string: $value) < (int)$min) {
            $this->addError($field, "O campo {$field} deve ter pelo menos {$min} caracteres");
        }
    }

    private function max(string $max, string $field, mixed $value): void
    {
        if (strlen(string: $value) > (int)$max) {
            $this->addError($field, "O campo {$field} deve ter no máximo {$max} caracteres");
        }
    }

    private function confirmed(string $field, mixed $value, mixed $confirmValue): void
    {
        if ($value !== $confirmValue) {
            $this->addError($field, "O campo {$field} deve ser igual ao campo de confirmação");
        }
    }

    private function addError(string $field, string $message): void
    {
        $this->errors[$field][] = $message;
    }
}
