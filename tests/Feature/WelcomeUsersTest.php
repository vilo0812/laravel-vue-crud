<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test*/
    public function it_welcome_users_with_nickname()
    {
        $this->get('/saludo/gabriel/vilonk')
        ->assertStatus(200)
        ->assertSee('eres el usuario Gabriel y tu apodo es: vilonk');
    }
     /** @test*/
    public function it_welcome_users_without_nickname()
    {
        $this->get('/saludo/gabriel')
        ->assertStatus(200)
        ->assertSee('eres el usuario Gabriel');
    }
}
