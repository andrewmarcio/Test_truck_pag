<?php

namespace App\Http\Controllers\Addresses;

use App\Http\Controllers\Controller;
use App\Services\Addresses\AddressIndexService;

class AddressIndexController extends Controller
{

    private $addressService;
    public function __construct(AddressIndexService $addressService)
    {
        $this->addressService = $addressService;
    }

    public function index()
    {
        return $this->addressService->index();
    }
}
