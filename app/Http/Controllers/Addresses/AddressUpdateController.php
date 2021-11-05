<?php

namespace App\Http\Controllers\Addresses;

use App\Http\Controllers\Controller;
use App\Http\Requests\Addresses\AddressFormRequest;
use App\Services\Addresses\AddressUpdateService;
use Illuminate\Http\Request;

class AddressUpdateController extends Controller
{
    private $addressService;
    public function __construct(AddressUpdateService $addressService)
    {
        $this->addressService = $addressService;
    }

    public function update(AddressFormRequest $request, $addressId)
    {
        return $this->addressService->update($addressId, $request);
    }
}
