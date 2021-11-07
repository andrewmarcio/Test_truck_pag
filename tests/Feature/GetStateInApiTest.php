<?php

namespace Tests\Feature;

use App\Utils\FindStateByUfUtil;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetStateInApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_state_in_api()
    {

        $uf = "CE";
        $state = collect((new FindStateByUfUtil($uf))->getState());
        $this->assertContains($uf, $state);
    }
}
