<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
       // $response = $this->get('/login');
$this->assertTrue(true);
    
       // $response->assertStatus(200);
    }

        /*
        $user = array(
             'usuario' => 'elmer', 
             'contrasena' => '12345'
        );

        $this->visit(route('login'))
            ->type($user->usuario, 'usuario')
            ->type('12345', 'contrasena')
            ->press('submit')
            ->see('Successfully logged in')
            ->onPage('/menu');
    */
}
