<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Alumno;
use App\Nota;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();

        $this->call(AppAlumno::class);
        $this->call(AppNota::class);

        //Model::reguard();
    }
}

class AppAlumno extends Seeder
{
    public function run()
    {
        DB::table('alumno')->delete();

        Alumno::create( [ 
            'nombre' => 'Sergio',
            'email' => 'sergio@correo.com',
         ] );

        Alumno::create( [ 
            'nombre' => 'Francisco',
            'email' => 'francisco@correo.com',
         ] );

        Alumno::create( [ 
            'nombre' => 'Marco',
            'email' => 'marco@correo.com',
         ] );

    }
}


class AppNota extends Seeder
{
    public function run()
    {
        DB::table('nota')->delete();

        Nota::create( [ 
            'curso' => 'Matematica',
            'nota' => '15',
            'alumno_id' => '1',
         ] );

        Nota::create( [ 
            'curso' => 'Lenguaje',
            'nota' => '14',
            'alumno_id' => '1',
         ] );

        Nota::create( [ 
            'curso' => 'Computacion',
            'nota' => '20',
            'alumno_id' => '1',
         ] );

        Nota::create( [ 
            'curso' => 'Civica',
            'nota' => '17',
            'alumno_id' => '2',
         ] );

    }
}

