<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Producto')->delete();

        $productos = [
            ['Codigo' => '123', 'Nombre' => 'Pan', 'Descripcion' => 'Pan del dia', 'PrecioCompra' => '0.30', 'PrecioVenta' => '0.50'],
            ['Codigo' => '456', 'Nombre' => 'Ades', 'Descripcion' => 'Jugo de soya', 'PrecioCompra' => '8', 'PrecioVenta' => '10'],
            ['Codigo' => '789', 'Nombre' => 'Cereal', 'Descripcion' => 'Cereal para consumir con leche', 'PrecioCompra' => '20', 'PrecioVenta' => '26'],
        ];

        DB::table('Producto')->insert($productos);
    }
}
