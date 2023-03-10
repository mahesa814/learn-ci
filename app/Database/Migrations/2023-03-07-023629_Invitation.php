<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Invitation extends Migration
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
            'program_id' => [
                'type' => 'BIGINT',
                'constraint' => 64,
                'unsigned' => true,
            ],
            'contact_id' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'status' => [
                'type' => 'ENUM("OTW", "NOT_RECEIVED", "PRESENT","NOT_PRESENT")',
                'default' => "OTW",
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

        $this->forge->createTable('invitations');
    }

    public function down()
    {
        $this->forge->dropTable('invitations');
    }
}
