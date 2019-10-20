<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModuleUserTest extends TestCase
{
    /** @test*/
/*    public function list_user_and_user_void()
    {
        $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('no hay usuarios registrados');
    }*/
    /** @test*/
    public function list_user()
    {
        $this->get('/inicio')
        ->assertStatus(200)
        ->assertSee('Listado de Usuarios')
        ->assertSee('Joel')
        ->assertSee('Gabriel');
    }
    /** @test*/
/*    public function show_user_by_id()
    {
        $this->get('/usuarios/1')
        ->assertStatus(200)
        ->assertSee('bienvenido desarrollador de Vue gabriel');
    }*/
    /** @test*/
/*    public function show_user_by_id_validation_if_user_not_empty()
    {
        $this->get('/usuarios/1?empty')
        ->assertStatus(200)
        ->assertSee('no eres un usuario');
    }*/
    /** @test*/
/*    public function show_user_by_id_2_isnot_him_is_ramon()
    {
        $this->get('/usuarios/2')
        ->assertStatus(200)
        ->assertSee('bienvenido desarrollador de Laravel ramon');
    }*/
    /** @test*/
/*    public function show_user_by_id_3_isnot_gabriel_or_ramon_is_jesus()
    {
        $this->get('/usuarios/3')
        ->assertStatus(200)
        ->assertSee('bienvenido desarrollador de React jesus');
    }*/
    /** @test*/
/*    public function show_user_by_id_3_isnot_gabriel_or_ramon_or_jesus_is_gean()
    {
        $this->get('/usuarios/4')
        ->assertStatus(200)
        ->assertSee('bienvenido desarrollador de Laravel gean');
    }*/
    /** @test*/
/*    public function list_create_user_nombre()
    {
        $this->get('/usuarios/nombre')
        ->assertStatus(200)
        ->assertSee('usuario crear')
        ->assertSee('gabriel')
        ->assertSee('jesus')
        ->assertSee('ramon')
        ->assertSee('gean');
    }*/

}
