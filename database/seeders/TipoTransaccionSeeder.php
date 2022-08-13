<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoTransaccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TipoAccion')->delete();

        $tiposAccion = [
            ['id' => 1, 'Nombre' => 'Compra', 'Descripcion' => 'Adquisicion de un bien'],
            ['id' => 2, 'Nombre' => 'Venta',  'Descripcion' => 'Venta de un bien'],
        ];

        DB::table('TipoAccion')->insert($tiposAccion);
    }
}
