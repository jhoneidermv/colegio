<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

    	$response = $this->get('/');
    //    $response->assertStatus(200);
    	 
         
 //       $this->visit('welcome')
   //          ->see('Bienvenido');
    
    /*
    $this->browse(function ($browser) {
            $browser->visit('/login')
                     ->type('elmer', 'usuario')
            		->type('12345', 'contrasena')
            		->press('Ingresar')
           			 ->assertSee('Successfully logged in')
           			 ->onPage('/menu');
        });


$this->visit('/login')
                     ->type('elmer', 'usuario')
                    ->type('12345', 'contrasena')
                    ->press('Ingresar')
                     ->assertSee('Successfully logged in')
                     ->onPage('/menu');
*/
    }
}
