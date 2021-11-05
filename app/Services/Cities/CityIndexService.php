<?php

namespace App\Services\Cities;

use App\Repositories\Contracts\CityRepository;

class CityIndexService {

    private $cityRepository;
    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    public function index()
    {
        try {
            $cities = $this->cityRepository->all();

            return response()->json($cities, 200);
        } catch (\Exception $e) {
            return response()->json([
                "error" => true,
                "message" => $e->getMessage()
            ], $e->getCode());
        }
    }
}