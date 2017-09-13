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
        User::create(array(
            'name' => 'Allen',
            'password' => Hash::make('general'),
            'email' => 'allen_general@rmit.edu.au',
        ));
    }
}
