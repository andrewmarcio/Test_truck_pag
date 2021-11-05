<?php

namespace App\Http\Controllers\Cities;

use App\Http\Controllers\Controller;
use App\Services\Cities\CityShowService;
use Illuminate\Http\Request;

class CityShowController extends Controller
{
    private $cityService;
    public function __construct(CityShowService $cityService)
    {
        $this->cityService = $cityService;
    }
    public function show($cityId)
    {
        return $this->cityService->show($cityId);
    }
}
