<?php

use Illuminate\Database\Seeder;
use App\Models\typePerson;

class typePersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo = typePerson::create([
            'nameTypePerson' => 'Mensajero',
        ]);
        $cargo = typePerson::create([
            'nameTypePerson' => 'Secretaria',
        ]);
        $cargo = typePerson::create([
            'nameTypePerson' => 'Auxiliar',
        ]);
        $cargo = typePerson::create([
            'nameTypePerson' => 'Contabilidad',
        ]);
        $cargo = typePerson::create([
            'nameTypePerson' => 'RRHH',
        ]);
        $cargo = typePerson::create([
            'nameTypePerson' => 'Licitaciones',
        ]);
        $cargo = typePerson::create([
            'nameTypePerson' => 'Gerente General',
        ]);
        $cargo = typePerson::create([
            'nameTypePerson' => 'Gerente Administrativo',
        ]);
    }
}
