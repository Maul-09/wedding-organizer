<?php

namespace Database\Seeders;

use App\Models\auth\AuthModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AuthModel::create([
            'username' => 'admin',
            'email' => 'admin@gmail',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
    }
}
