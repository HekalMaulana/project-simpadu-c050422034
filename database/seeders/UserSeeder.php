<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(250)->create();

        User::create([
            'name' => 'arifin noor asyikin',
            'email' => 'noor@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'roles' => 'mahasiswa',
        ]);
    }
}
