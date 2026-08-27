<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso1 = new Curso();
        $curso1->nombre = 'wordpress';
        $curso1->descripcion ='El mejor CMS para desarrollo web';
        $curso1->categoria = 'Desarrollo Web';
        $curso1->save();

        $curso2 = new Curso();
        $curso2->nombre='Laravel';
        $curso2->descripcion='El mejor framework para desarrollo web';
        $curso2->categoria='Desarrollo web';
        $curso2->save();

    }
}
