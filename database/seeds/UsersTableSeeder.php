<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Create the superuser
         */
        User::create([
            'name'         => 'root',
            'email'        => 'root@unix.io',
            'password'     => bcrypt('secret')
        ]);

        /**
         * Create a friend for the superuser
         */
        User::create([
            'name'         => 'chmodplusx',
            'email'        => 'chmod@plus.x',
            'password'     => bcrypt('secret')
        ]);
    }
}
