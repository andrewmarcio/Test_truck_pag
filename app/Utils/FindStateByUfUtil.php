<?php

namespace App\Utils;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class FindStateByUfUtil {

    private $state;
    private const ENDPOINT = "localidades/estados/";

    public function __construct($uf)
    {
        $uri = config("app.ibge_api_url") . self::ENDPOINT . Str::upper($uf);
        $this->state = Http::get($uri);
    }

    public function getState()
    {
        return $this->state->object();
    }
}