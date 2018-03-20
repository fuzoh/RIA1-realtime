<?php

use Illuminate\Database\Seeder;
use App\Message;
use App\User;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages = [
            'Salut',
            'Tutu',
            'Some messages',
            'Salut',
            'Tutu',
            'Some messages'
        ];

        // Create some messages
        foreach ($messages as $message) {
            $msg = new Message(['content' => $message]);
            $msg->user()->associate(User::all()->random());
            $msg->save();
        }
    }
}
