<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        $status= [
            ['name' => 'Ativo','alias' => 'Ativo'],
            ['name' => 'Inativo','alias' => 'Inativo'],
            ['name' => 'Em Aprovação','alias' => 'Em Aprovação'],
        ];

        Status::insert($status);
    }
}
