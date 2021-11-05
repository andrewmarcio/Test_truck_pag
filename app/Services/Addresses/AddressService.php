<?php

namespace App\Services\Addresses;

use App\Repositories\Contracts\AddressRepository;

class AddressService {

    protected $addressRepository;
    public function __construct(AddressRepository $addressRepository)
    {
        $this->addressRepository = $addressRepository;
    }
}