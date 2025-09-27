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
        $adminUser = User::all()->first();

        if (!$adminUser) {
            User::create([
                'name'  => 'Admin',
                'email' => env('ADMIN_DEFAULT_EMAIL') ?? 'admin@mail.com',
                'password' => env('ADMIN_DEFAULT_PASSWORD')
                    ? Hash::make(env('ADMIN_DEFAULT_PASSWORD'))
                    : Hash::make('secret'),
            ]);
        }
    }
}
