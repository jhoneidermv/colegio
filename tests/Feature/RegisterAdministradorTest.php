<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterAdministradorTest extends TestCase
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
 $this->visit('/registroUsuario')
            ->type('1093', 'documento')
            ->type('jhon', 'nombre')
            ->type('ramirez', 'apellido')
            ->type('12345', 'contrasena')
            ->type('3162953', 'telefono')
			->type('jhon', 'usuario')
			->type('mz 30 #12', 'direccion')
			->type('ramirescortes@hotmail.com', 'correo')
            ->press('Registrar')
            ->see('register')
            ->seeInDatabase('Administrador');
  */
    }
}
