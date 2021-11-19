<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Hotel;

class HotelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_hotel_listing()
    {
        $hotel = Hotel::where('status', 1)->get()->random(1)->first();
        $response = $this->get('/api/get_hotel_listing/'.$hotel->id);

        $response->assertStatus(200);
    }
}
