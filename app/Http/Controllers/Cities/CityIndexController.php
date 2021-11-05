<?php

namespace App\Http\Controllers\Cities;

use App\Http\Controllers\Controller;
use App\Services\Cities\CityIndexService;
use Illuminate\Http\Request;

class CityIndexController extends Controller
{

    private $cityService;
    public function __construct(CityIndexService $cityService)
    {
        $this->cityService = $cityService;
    }
    
    public function index()
    {
        return $this->cityService->index();
    }
}
