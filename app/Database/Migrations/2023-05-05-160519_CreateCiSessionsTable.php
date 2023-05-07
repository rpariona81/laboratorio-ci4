<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCiSessionsTable extends Migration
{
    protected $DBGroup = 'default';

    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'VARCHAR', 'constraint' => 128, 'null' => false],
            'ip_address' => ['type' => 'VARCHAR', 'constraint' => 45, 'null' => false],
            'timestamp timestamp DEFAULT CURRENT_TIMESTAMP NOT NULL',
            'data' => ['type' => 'BLOB', 'null' => false],
            'user_id' => ['type' => 'BIGINT', 'null' => true],
            'user_agent' => ['type' => 'TEXT', 'null' => true],
            'payload' => ['type' => 'LONGTEXT', 'null' => true],
            'last_activity' => ['type' => 'BIGINT', 'null' => true]
         ]);
        $this->forge->addKey('id', true);
        $this->forge->addKey('timestamp');
        $this->forge->createTable('t_sessions', true);
    }

    public function down()
    {
        $this->forge->dropTable('t_sessions', true);
    }
}
