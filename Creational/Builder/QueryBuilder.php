<?php

namespace Builder;

interface QueryBuilder
{
    public function select(string $table, array $fields): QueryBuilder;

    public function where(string $field, string $value, string $operator = '='): QueryBuilder;

    public function limit(int $start, int $offset): QueryBuilder;

    // +100 other SQL syntax methods...

    public function getSQL(): string;
}