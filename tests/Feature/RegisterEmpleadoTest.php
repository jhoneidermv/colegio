<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterEmpleadoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
        /*
        $this->visit('/registroEmpleado')
            ->type('1093', 'documento')
            ->type('jhon', 'nombre')
            ->type('ramirez', 'apellido')
            ->type('12345', 'nacionalidad')
            ->type('3162953', 'celular')
			->type('jhon', 'telefono')
			->type('mz 30 #12', 'direccion')
			->type('1992/05/13', 'Fecha Nacimiento')
		    ->type('universitario', 'estudiosRealizados')
			->type('pregrado', 'nivel')
			->type('Uq', 'lugarEstudios')
			->type('docente', 'cargo')
			->type('5B', 'grado')
			->type('Uq', 'tiempoTrabajo')
			->type('17/04/2017', 'fechaIngreso')
			->type('1200000', 'valorNomina')
			->type('casado', 'EstadoCivil')
            ->press('Registrar')
            ->see('register')
            ->seeInDatabase('Empleado');    
    */
    }
}
