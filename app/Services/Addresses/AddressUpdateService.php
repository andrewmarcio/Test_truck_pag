<?php

namespace App\Services\Addresses;

use Illuminate\Http\Request;

class AddressUpdateService extends AddressService {

    public function update($addressId, Request $data)
    {
        try {
            $address = $this->addressRepository->update(
                $data->only("street_name", "number", "neighborhood", "city_id"),
                $addressId
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