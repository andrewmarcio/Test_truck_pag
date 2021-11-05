<?php

namespace App\Utils;

use Illuminate\Support\Facades\Http;

class GetCitiesByStateIdUtil {

    private $cities;
    private const ENDPOINT = "localidades/estados/{stateId}/municipios";

    public function __construct(int $stateId)
    {
        $uri = config("app.ibge_api_url") . self::ENDPOINT;
        $uri = str_replace("{stateId}", $stateId, $uri);
        $this->cities = Http::get($uri);
    }

    public function getCities()
    {
        return $this->cities->object();
    }
}