<?php

namespace Tests\Feature;

use App\Utils\FindStateByUfUtil;
use App\Utils\GetCitiesByStateIdUtil;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetCitiesInApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_cities_by_uf_id()
    {
        $uf = "CE";
        $state = (new FindStateByUfUtil($uf))->getState();
        $cities = (new GetCitiesByStateIdUtil($state->id))->getCities();
        
        $this->assertNotEmpty($cities);
    }
}
