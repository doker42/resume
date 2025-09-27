<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::where([
            'email' => 'admin@mail.com',
        ])->first();
        if (!$adminUser) {
            User::create([
                'name'  => 'Admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('admin123'),
            ]);
        }
    }
}
