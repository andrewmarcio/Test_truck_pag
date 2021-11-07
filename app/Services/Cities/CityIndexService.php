<?php

namespace App\Services\Cities;

use App\Repositories\Contracts\CityRepository;
use Illuminate\Support\Facades\Request;

class CityIndexService {

    private $cityRepository;
    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    public function index()
    {
        try {
            $limit = Request::get("limit");
            $cities = $this->cityRepository->paginate($limit);

            return response()->json($cities, 200);
        } catch (\Exception $e) {
            return response()->json([
                "error" => true,
                "message" => $e->getMessage()
            ], $e->getCode());
        }
    }
}