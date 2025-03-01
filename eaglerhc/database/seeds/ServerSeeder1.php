<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServerModel1;

class ServerSeeder1 extends Seeder
{
    public function run()
    {
        ServerModel1::create([
            'name' => 'Main Server',
            'status' => 'active',
            'ip_address' => '192.168.1.1'
        ]);
    }
}