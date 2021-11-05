<?php

namespace App\Utils;

use App\Models\City;
use Illuminate\Support\Collection;

class StoreCitiesUtil {

    public static function store(Collection $cities)
    {
        try {
            $cities->each(function($city){
                City::create([
                    "name" => $city->nome
                ]);
            });
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}