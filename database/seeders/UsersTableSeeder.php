<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* creacion del usuario administrador*/
        $administrador = User::create([
            'name'=>'administrador',
            'email'=>'administrador@cts.com',
            'password'=> Hash::make('password')
    ]);
    /* asignacion del usuario administrador*/
    $administrador->assignRole('administrador');


    /* creacion del usuario soporte*/
    $soporte = User::create([
            'name'=>'soporte',
            'email'=>'soporte@cts.com',
            'password'=> Hash::make('password')
           

    ]);
    /* asignacion del usuario soporte*/
    $soporte->assignRole('soporte');


    /* creacion del usuario tecnico*/
    $tecnico = User::create([
            'name'=>'tecnico',
            'email'=>'tecnico@cts.com',
            'password'=> Hash::make('password')
            

    ]);
    /* asignacion del usuario tecnico*/
    $tecnico->assignRole('tecnico');
    }
}
