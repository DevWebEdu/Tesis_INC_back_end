<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('app')->insert([
            'name_app' => 'Gfiscal',
            'description' => 'Aplicacion para facturacion',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('app')->insert([
            'name_app' => 'Portal comercial',
            'description' => 'Aplicacion para la venta de equipos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('app')->insert([
            'name_app' => 'Jerarquia de Ventas',
            'description' => 'Aplicacion para creacion de bodegas en Telefonica',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('app')->insert([
            'name_app' => 'Sivadac',
            'description' => 'Aplicacion para el monitoreo de trabajadores en Telefonica',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('app')->insert([
            'name_app' => 'Pacifyc',
            'description' => 'Aplicacion para el monitoreo de liquidaciones',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
