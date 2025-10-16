<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Filmes')->insert(
            [
                [
                    'nome' => "Tropa de Elite",
                    'descricao' => "Filme brasileiro",
                ],

                [
                    'nome' => "Transformers",
                    'descricao' => "Robôs brigando",
                ],
                [
                    'nome' => "Interestellar",
                    'descricao' => "viagem espacial",
                ],
            ]
        );
    }
}
