<?php

namespace sf2ny\Schema;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Platform\AbstractPlatform as Platform;

class AddBlogType
{
    private $schema;
    private $conn;
    private $platform;

    public function __construct(Schema $schema, Connection $conn, Platform $platform)
    {
        $this->schema = $schema;
    }

    public function create()
    {
        $sql = $this->getSql();
        return $this->execute($query);
    }

    public function getSql()
    {
        $table = $this->schema->createTable('blog');
        $table->addColumn('id', 'integer', array('autoincrement' => true));
        $table->addColumn('title', 'string', array('length' => 255));
        $table->addColumn('last_updated', 'integer', array(
            'columnDefinition' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        $table->addColumn('body', 'text');
        $table->setPrimaryKey(array('id'));
        $queries = $schema->toSql($myPlatform);
    }

    public function execute($query)
    {
        $this->conn->exec($)
    }
}