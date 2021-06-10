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
        $response1 = $this->post('/user', array(
            'id' => 1,
            'password' => '720DF6C2482218518FA20FDC52D4DED7ECC043AB',
            'comments' => 'Testing this function'
        ));

        $response2 = $this->postJson('/json/user', array(
            'id' => 2,
            'password' => '720DF6C2482218518FA20FDC52D4DED7ECC043AB',
            'comments' => 'Testing this JSON function'
        ));

        $response1->assertStatus(200);
        $response2->assertStatus(200);
    }
}
