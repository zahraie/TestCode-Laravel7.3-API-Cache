<?php

namespace App\Repository;

use App\City As CityModel;

class City{

    CONST CACHE_KEY = 'CITIES';

    public function all($orderBy)
    {
        $key = "all.{$orderBy}";
        $cacheKey = $this->getCacheKey($key);
        return cache()->remember($cacheKey, now()->addSeconds('10'), function () use($orderBy) {
            return CityModel::orderBy($orderBy)->get();
        });
    }


    public function getCacheKey($key)
    {
        $key = strtoupper($key);
        return self::CACHE_KEY . '.' . $key;
    }


}
