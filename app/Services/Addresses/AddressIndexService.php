<?php

namespace App\Services\Addresses;

class AddressIndexService extends AddressService{

    public function index()
    {
        try {
            $addresses = $this->addressRepository->all();
            
            return response()->json($addresses, 200);
        } catch (\Exception $e) {
            return response()->json([
                "error" => true,
                "code" => $e->getCode(),
                "message" => $e->getMessage(),
            ], 500);
        }
    }
}