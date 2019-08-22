<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModuleUserTest extends TestCase
{
    /** @test*/
    public function list_user_and_user_void()
    {
        $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('no hay usuarios registrados');
    }
    /** @test*/
    public function list_user()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('listado de usuarios')
        ->assertSee('Joel')
        ->assertSee('gabriel');
    }
    /** @test*/
    public function show_user_by_id()
    {
        $this->get('/usuarios/1')
        ->assertStatus(200)
        ->assertSee('bienvenido desarrollador de Vue gabriel');
    }
    /** @test*/
    public function show_user_by_id_validation_if_user_not_empty()
    {
        $this->get('/usuarios/1?empty')
        ->assertStatus(200)
        ->assertSee('no eres un usuario');
    }
    /** @test*/
    public function show_user_by_id_2_isnot_him_is_ramon()
    {
        $this->get('/usuarios/2')
        ->assertStatus(200)
        ->assertSee('bienvenido desarrollador de Vue gabriel')
        ->assertSee('bienvenido desarrollador de Laravel ramon');
    }
    /** @test*/
    public function show_user_by_id_3_isnot_gabriel_or_ramon_is_jesus()
    {
        $this->get('/usuarios/3')
        ->assertStatus(200)
        ->assertSee('bienvenido desarrollador de Vue gabriel')
        ->assertSee('bienvenido desarrollador de Laravel ramon')
        ->assertSee('bienvenido desarrollador de React jesus');
    }
    /** @test*/
    public function list_create_user_nombre()
    {
        $this->get('/usuarios/nombre')
        ->assertStatus(200)
        ->assertSee('usuario crear')
        ->assertSee('gabriel')
        ->assertSee('jesus')
        ->assertSee('ramon')
        ->assertSee('gean');
    }
    /** @test*/
    public function list_create_user_nombre_empty()
    {
        $this->get('/usuarios/nombre?empty')
        ->assertStatus(200)
        ->assertSee('usuario vacio');

    }

}
