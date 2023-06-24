<?php

namespace Builder;

class PostgresQueryBuilder extends MysqlQueryBuilder
{
    /**
     * Among other things, PostgreSQL has slightly different LIMIT syntax.
     */
    public function limit(int $start, int $offset): QueryBuilder
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }
}