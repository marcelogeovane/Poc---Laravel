<?php

use Illuminate\Database\Seeder;

use App\Predio;

class PredioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Predio::class)->create([
            'name' => 'Joaquim Rodarte',
        ]);

        factory(Predio::class)->create([
            'name' => 'Matriz',
        ]);

        factory(Predio::class)->create([
            'name' => 'Vicentinos',
        ]);

        factory(Predio::class)->create([
            'name' => 'Antonio Vieira',
        ]);

        factory(Predio::class)->create([
            'name' => 'Casa do Engenheiro',
        ]);

        factory(Predio::class)->create([
            'name' => 'EMART',
        ]);

        factory(Predio::class)->create([
            'name' => 'Estação',
        ]);

        factory(Predio::class)->create([
            'name' => 'Matadouro',
        ]);
    }
}
