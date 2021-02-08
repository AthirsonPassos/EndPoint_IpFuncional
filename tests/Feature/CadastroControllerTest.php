<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CadastroControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function it_allows_anyone_to_see_list_all_articles()
    {
        $response = $this->get(route('adicionar_cadastro'));
        $response->assertSuccessful();
    }
}
