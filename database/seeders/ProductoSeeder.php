<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Chipa',
            'precio' => 5000,
        ]);

        Producto::create([
            'nombre' => 'Mbejú',
            'precio' => 7000,
        ]);

        Producto::create([
            'nombre' => 'Cocido',
            'precio' => 4000,
        ]);

        Producto::create([
            'nombre' => 'Sopa Paraguaya',
            'precio' => 8000,
        ]);

        Producto::create([
            'nombre' => 'Empanada',
            'precio' => 6000,
        ]);
    }
}
