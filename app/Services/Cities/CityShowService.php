<?php

namespace App\Services\Cities;

use App\Repositories\Contracts\CityRepository;

class CityShowService {

    private $cityRepository;
    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    public function show($cityId)
    {
        try {
            $city = $this->cityRepository->find($cityId);
            $city->load("addresses");

            return response()->json($city, 200);
        } catch (\Exception $e) {
            return response()->json([
                "error" => true,
                "message" => $e->getMessage()
            ], $e->getCode());
        }
    }
}