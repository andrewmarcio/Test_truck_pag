<?php

namespace App\Services\Addresses;

use App\Repositories\Contracts\AddressRepository;
use Illuminate\Http\Request;

class AddressStoreService {

    private $addressRepository;
    public function __construct(AddressRepository $addressRepository)
    {
        $this->addressRepository = $addressRepository;
    }

    public function store($data)
    {
        try {
            $address = $this->addressRepository->create(
                $data->only("street_name", "number", "neighborhood", "city_id")
            );
            
            return response()->json($address, 200);
        } catch (\Exception $e) {
            return response()->json([
                "error" => true,
                "code" => $e->getCode(),
                "message" => $e->getMessage(),
            ], 500);
        }
    }
}