<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            ProductImageSeeder::class,
        ]);
    }
}
