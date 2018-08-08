<?php

use Illuminate\Database\Seeder;
use App\User;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'codPerson' 	 => '00000', 
            'namePerson' 	 => 'SAdmin',
            'lastnamePerson' => 'sadmin',
            'email' 	     => 'sadmin@consultecnicos.com',
            'typePerson_id'	 => '1',
            'dependency_id'	 => '6',
            'password'       => bcrypt('codPerson')
        ]);

        $user = User::create([
            'codPerson' 	 => '22222', 
            'namePerson' 	 => 'Admin',
            'lastnamePerson' => 'admin',
            'email' 	     => 'admin@consultecnicos.com',
            'typePerson_id'	 => '2',
            'dependency_id'	 => '6',
            'password'       => bcrypt('codPerson')
        ]);

        $user = User::create([
            'codPerson' 	 => '33333', 
            'namePerson' 	 => 'Operador',
            'lastnamePerson' => 'operador',
            'email' 	     => 'operador@consultecnicos.com',
            'typePerson_id'	 => '3',
            'dependency_id'	 => '6',
            'password'       => bcrypt('codPerson')
        ]);

        $user = User::create([
            'codPerson' 	 => '44444', 
            'namePerson' 	 => 'Consulta',
            'lastnamePerson' => 'Consulta',
            'email' 	     => 'consult@consultecnicos.com',
            'typePerson_id'	 => '4',
            'dependency_id'	 => '6',
            'password'       => bcrypt('codPerson')
        ]);

    }
}
