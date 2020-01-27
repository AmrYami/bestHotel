<?php

namespace Tests\Feature;

use App\Http\Controllers\OurHotels;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {

        $response = $this->get('/api/allData');

        $response->assertStatus(200);

}

}