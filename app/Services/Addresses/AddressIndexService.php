<?php

namespace App\Services\Addresses;

use Illuminate\Support\Facades\Request;

class AddressIndexService extends AddressService{

    public function index()
    {
        try {

            $limit = Request::get("limit");
            $addresses = $this->addressRepository->paginate($limit);
            
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