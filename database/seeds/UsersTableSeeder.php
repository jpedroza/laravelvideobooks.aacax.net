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
		$user = \App\User::firstOrCreate(['email' => 'john@harvard.edu']);
        $user->name = 'John';
        $user->email = 'john@harvard.edu';
        $user->password = \Hash::make('helloworld');
        $user->save();
    }
}
