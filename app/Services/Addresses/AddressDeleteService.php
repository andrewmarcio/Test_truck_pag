<?php

namespace App\Services\Addresses;

class AddressDeleteService extends AddressService{

    public function delete($addressId)
    {
        try {
            $this->addressRepository->delete($addressId);
            return response()->json(["message" => "Address deleted successfully."], 200);
        } catch (\Exception $e) {
            return response()->json([
                "error" => true,
                "code" => $e->getCode(),
                "message" => $e->getMessage()
            ]);
        }   
    }
}