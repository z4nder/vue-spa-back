<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'email' => 'gusttavo212@gmail.com',
            'password' => 'senha123'
        ]);

        factory(\App\User::class, 5)->create();
    }
}