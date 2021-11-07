<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateCitiesTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_cities()
    {
        $uf = "CE";
        $state = (new \App\Utils\FindStateByUfUtil($uf))->getState();
        $cities = (new \App\Utils\GetCitiesByStateIdUtil($state->id))->getCities();
        
        $createdCities = \App\Utils\StoreCitiesUtil::store(collect($cities));
        
        $this->assertTrue($createdCities);
    }
}
