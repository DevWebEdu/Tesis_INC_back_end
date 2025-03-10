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
            'name_app' => 'Visor Asis',
            'description' => 'Visor Asis',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('app')->insert([
            'name_app' => 'Visor',
            'description' => 'Visor',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('app')->insert([
            'name_app' => 'Validación de RUC',
            'description' => 'Validación de RUC',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('app')->insert([
            'name_app' => 'SIVADAC',
            'description' => 'SIVADAC',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('app')->insert([
            'name_app' => 'Portal contraseña única',
            'description' => 'Portal contraseña única',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('app')->insert([
            'name_app' => 'Pacifyc',
            'description' => 'Pacifyc',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        
        DB::table('app')->insert([
            'name_app' => 'Magento',
            'description' => 'Magento',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('app')->insert([
            'name_app' => 'Login b2c',
            'description' => 'Login b2c',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('app')->insert([
            'name_app' => 'Jerarquia Ventas',
            'description' => 'Jerarquia Ventas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('app')->insert([
            'name_app' => 'IME',
            'description' => 'IME',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('app')->insert([
            'name_app' => 'Gfiscal',
            'description' => 'Gfiscal',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('app')->insert([
            'name_app' => 'Front End (DITO Convergente)',
            'description' => 'Front End (DITO Convergente)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('app')->insert([
            'name_app' => 'Brainy Bill',
            'description' => 'Brainy Bill',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('app')->insert([
            'name_app' => 'App Ventas Movil',
            'description' => 'App Ventas Movil',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('app')->insert([
            'name_app' => 'App Mi Movistar',
            'description' => 'App Mi Movistar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('app')->insert([
            'name_app' => 'App Delivery',
            'description' => 'App Delivery',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('app')->insert([
            'name_app' => 'App Chip Autoactivado',
            'description' => 'App Chip Autoactivado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('app')->insert([
            'name_app' => 'Aplicaciones BI',
            'description' => 'Aplicaciones BI',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
