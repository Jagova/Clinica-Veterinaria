<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'administrador@gmail.com',
            'rol' => 'ADMINISTRADOR',
            'password' => Hash::make('12345678')
        ]);

        DB::table('users')->insert([
            'name' => 'Doctor',
            'email' => 'doctor@gmail.com',
            'rol' => 'DOCTOR',
            'password' => Hash::make('12345678')
        ]);
        
        DB::table('users')->insert([
            'name' => 'Asistente',
            'email' => 'asistente@gmail.com',
            'rol' => 'ASISTENTE',
            'password' => Hash::make('12345678')
        ]);       
    }
}
