<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePeople extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'people_id' => [
                'type'           => 'BIGINT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'document_type' => [
                'type'       => 'INT',
                'constraint' => '1',
                'unsigned'   => true,
                'null' => true,
            ],
            'document_number' => [
                'type' => 'VARCHAR',
                'constraint' => '11',
                'null' => true,
            ],
            'names' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'paternal_surname' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'maternal_surname' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'sex' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
                'null' => true,
            ],
            'civil_status' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
            ],
            'birthdate' => [
                'type' => 'DATE',
                'constraint' => '20',
                'null' => true,
            ],
            'native_language' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
            ],
            'birth_country' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'have_disability' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('people_id', true);
        $this->forge->createTable('t_people');
    }

    public function down()
    {
        $this->forge->dropTable('t_people');
    }
}
