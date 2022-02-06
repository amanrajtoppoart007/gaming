<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       public function run()
    {
        $admins = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@gaming.com',
                'password'           =>'$2y$10$Phq5VMDVoliTezARpj9mD.PJy8NM2/13OFgIl7aKuVsQlOnMJMMDq',//password
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => date("Y-m-d H:i:s"),
                'verification_token' => '',
            ],
            [
                'id'                 => 2,
                'name'               => 'Demo',
                'email'              => 'demo@gaming.com',
                'password'           =>  '$2y$10$Phq5VMDVoliTezARpj9mD.PJy8NM2/13OFgIl7aKuVsQlOnMJMMDq',//password
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => date("Y-m-d H:i:s"),
                'verification_token' => '',
            ],
        ];

        Admin::insert($admins);
    }
}
