<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModuleUserTest extends TestCase
{
    /** @test*/
    public function list_user()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('usuarios');
    }
    /** @test*/
    public function list_user_detail()
    {
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('eres un usuario y tu id es:5');
    }
    /** @test*/
    public function list_user_nombre()
    {
        
        $this->get('/usuarios/nombre')
        ->assertStatus(200)
        ->assertSee('usuario crear');

    }

}
