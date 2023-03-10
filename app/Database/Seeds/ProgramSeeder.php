<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProgramSeeder extends Seeder
{
    public function run()
    {
        $porgrams  = [
            'name' => 'mahesa',
            'email' => 'mahesa@gmail.com',
            'password' => 'mahesa'
        ];

        $this->db->table('programs')->insert($porgrams);
    }
}
