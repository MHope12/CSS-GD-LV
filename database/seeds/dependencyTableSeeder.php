<?php

use Illuminate\Database\Seeder;
use App\Models\Dependency;

class dependencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areaw = Dependency::create([
            'nameDependency' => 'Secreataría'
        ]);
        $areaw = Dependency::create([
            'nameDependency' => 'Contabilidad'
        ]);
        $areaw = Dependency::create([
            'nameDependency' => 'Licitaciones'
        ]);
        $areaw = Dependency::create([
            'nameDependency' => 'Gestión Documental'
        ]);
         $areaw = Dependency::create([
            'nameDependency' => 'Gerencia Administrativa'
        ]);
        $areaw = Dependency::create([
            'nameDependency' => 'Gerencia General'
        ]);
    }   
}
