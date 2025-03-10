<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'ylactayo',
            'name' => 'Yactayo Espejo, Luis Alberto',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('users')->insert([
            'username' => 'jtruquispe',
            'name' => 'Trujillo Quispe, Julio Cesar',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'username' => 'ftruni',
            'name' => 'Trujillo Nieves, Felix',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);



    DB::table('users')->insert([
            'username' => 'jtrejo',
            'name' => 'Trejo Ocaña, Jason Yeremy',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('users')->insert([
            'username' => 'bshapi',
            'name' => 'Shapiama Chujutalli, Brandhom Alberto',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'username' => 'fquispe',
            'name' => 'Quispe Cahuana, Frank Berly',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('users')->insert([
            'username' => 'mpache',
            'name' => 'Pacheco Quispe, Miguel Angel Robinson',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('users')->insert([
            'username' => 'dniev',
            'name' => 'Nieves Estacio, Diego Juan',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'username' => 'ejluna',
            'name' => 'Luna Meza, Eduardo Jaell',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);



        
        DB::table('users')->insert([
            'username' => 'jalaz',
            'name' => 'Lazaro Marquez, Joaquin Alonso',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('users')->insert([
            'username' => 'mjuni',
            'name' => 'Junior Rutbher Miguel Maquin',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'username' => 'pguille',
            'name' => 'Guillen Acuña, Paul Antony',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('users')->insert([
            'username' => 'cferte',
            'name' => 'Fernandez Tello, Cesar Arturo',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('users')->insert([
            'username' => 'ccruad',
            'name' => 'Cuadros Arguedas, Christian Martin',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'username' => 'icarde',
            'name' => 'Cardeña Flores, Ivan Raul',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'username' => 'ecald',
            'name' => 'Calderon Carrera, Edwin Yhoel',
            'password' => Hash::make('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
