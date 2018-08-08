<?php

use Illuminate\Database\Seeder;
use App\Models\Role_User;

class RUTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ru = Role_User::create([
            'role_id' => '1',
            'user_id' => '1',
            'remember_token' => str_random(10)

        ]);

        $ru = Role_User::create([
            'role_id' => '2',
            'user_id' => '2',
            'remember_token' => str_random(10)

        ]);

        $ru = Role_User::create([
            'role_id' => '3',
            'user_id' => '3',
            'remember_token' => str_random(10)

        ]);

        $ru = Role_User::create([
            'role_id' => '4',
            'user_id' => '4',
            'remember_token' => str_random(10)

        ]);
    }
}
