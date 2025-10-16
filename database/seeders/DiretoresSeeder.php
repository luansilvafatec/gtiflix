<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiretoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diretores')->insert(
            [
                [
                    'nome' => "José Moura",
                    'descricao' => "Gosta de filmes de ação",
                    'nacionalidade_id' => 1
                ],

                [
                    'nome' => "Carlos Carlota",
                    'descricao' => "Diretor de muitos filmes famosos",
                    'nacionalidade_id' => 2
                ],
            ]
        );
    }
}
