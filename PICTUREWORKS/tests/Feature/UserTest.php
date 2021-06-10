<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->post('/user', array(
            'id' => 1,
            'password' => '720DF6C282218518FA20FDC52D4DED7ECC043AB',
            'comments' => 'Testing this fucntion'
        ));

        $response->assertStatus(200);
    }
}
