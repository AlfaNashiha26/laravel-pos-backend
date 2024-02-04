<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(9)->create();

        \App\Models\User::factory()->create([
            'name' => 'Alfa',
            'email' => 'alfanashiha79@gmail.com',
            'password'=> Hash::make('alfa2626'),
            'phone'=> '085323147012',
            'roles'=> 'OWNER',
        ]);
    }
}
