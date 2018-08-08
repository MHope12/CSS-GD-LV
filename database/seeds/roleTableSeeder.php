<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class roleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = Role::create([
            'nameRole'    => 'Superadministrador',
            'slug'        => 'superadmin',
            'description' => 'Mantener  y prever por las funciones, procesos y seguridad del Sistema de Información',
        	'remember_token' => str_random(10)
        ]);

        $role = Role::create([
            'nameRole'    => 'Administrador',
            'slug'        => 'admin',
            'description' => 'Delegar funciones por roles de usuario',
        	'remember_token' => str_random(10)
        ]);

        $role = Role::create([
            'nameRole'    => 'Operador',
            'slug'        => 'operador',
            'description' => 'Encargado de procesos sobre E-Docs y Carpetas / Proyectos',
        	'remember_token' => str_random(10)
        ]);

        $role = Role::create([
            'nameRole'    => 'Consulta',
            'slug'        => 'consulta',
            'description' => 'Consulta de Carpetas / Proyectos y E-Docs',
        	'remember_token' => str_random(10)
        ]);
    }
}
