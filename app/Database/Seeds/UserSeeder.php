<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users  = [
            'name' => 'mahesa',
            'email' => 'mahesa@gmail.com',
            'password' => 'mahesa'
        ];

        $this->db->table('users')->insert($users);
    }
}
