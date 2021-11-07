<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateAddressTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_address()
    {

        $city = \App\Models\City::create([
            "name" => "Fortaleza"
        ]);

        \App\Models\Address::create([
            "street_name" => "R. Dom Jerônimo",
            "number" => "985",
            "neighborhood" => "Farias Brito",
            "city_id" => $city->id
        ]);

        $this->assertDatabaseHas("cities", ["name" => "Fortaleza"]);
        $this->assertDatabaseHas("addresses", ["street_name" => "R. Dom Jerônimo", "city_id" => $city->id]);
    }
}
