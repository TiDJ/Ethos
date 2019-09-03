<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Kisara',
            'email' => 'rslokiju@gmail.com',
            'password' => bcrypt('julien59700'),
            'isAdmin' => true,
            'created_at' => now(),
            'email_verified_at' => now(),

        ]);

        DB::table('users')->insert([
            'name' => 'Ibra',
            'email' => 'ibraziata7@gmail.com',
            'password' => bcrypt('ibraziata7'),
            'isAdmin' => true,
            'created_at' => now(),
            'email_verified_at' => now(),

        ]);
    }
}
