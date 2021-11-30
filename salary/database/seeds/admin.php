<?php

use Illuminate\Database\Seeder;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user -> name = "admin";
        $user -> email = "administrator@admin.com";
        $user -> password = \Hash::make('admin123mamang');
        $user -> save();
    }
}
