<?php

namespace App\Http\Controllers\Addresses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Addresses\AddressFormRequest;
use App\Services\Addresses\AddressStoreService;
use Illuminate\Http\Request;

class AddressStoreController extends Controller
{
    private $addressService;
    public function __construct(AddressStoreService $addressService)
    {
        $this->addressService = $addressService;
    }

    public function store(AddressFormRequest $request)
    {
        return $this->addressService->store($request);
    }
}
