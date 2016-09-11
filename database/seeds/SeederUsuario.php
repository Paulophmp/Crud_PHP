<?php

use Illuminate\Database\Seeder;

class SeederUsuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meu_models')->truncate();
        factory(App\meuModel::class, 25)->create();
    }
}
