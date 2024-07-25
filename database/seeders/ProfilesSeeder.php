<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            ['name' => 'Super Admin','alias' => 'Super Admin'],
            ['name' => 'Admin','alias' => 'Admin'],
            ['name' => 'User','alias' => 'User'],
            ['name' => 'Cliente','alias' => 'Cliente'],
        ];

        Profile::insert($profiles);
    }
}
