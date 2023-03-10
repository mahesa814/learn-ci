<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Invited extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'constraint' => 64,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'contact_name' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true,
            ],
            'program_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'status' => [
                'type' => 'ENUM("OTW", "NOT_RECEIVED", "PRESENT","NOT_PRESENT")',
                'null' => true,
            ],
            'date_program' => [
                'type' => 'date',
                'null' => true,
            ],
            'description' => [
                'type' => 'text',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('invited');
    }

    public function down()
    {
        $this->forge->dropTable('invited');
    }
}
