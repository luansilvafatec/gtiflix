<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutorasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtoras')->insert(
            [
                ['nome' => "Nacional Filmes"],
                ['nome' => "Warnerbros"],
                ['nome' => "TNT Movies"],
                ['nome' => "Movie Plus"],
                ['nome' => "Max"],
            ]
        );
    }
}
