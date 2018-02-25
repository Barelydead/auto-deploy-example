<?php

namespace App\Contact;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'contact_address';

    public function getAddress()
    {
        $addressStored = $this->first();
        return [
            "companyName" => $addressStored->companyName,
            "street" => $addressStored->street,
            "postalcode" => $addressStored->postalcode,
            "city" => $addressStored->city,
            "state" => $addressStored->state,
            "country" => $addressStored->country,
            "telephone" => $addressStored->telephone,
            "email" => $addressStored->email
        ];
    }
}
