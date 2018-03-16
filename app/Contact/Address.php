<?php

namespace App\Contact;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'contact_address';

    /**
     * Get stored address information
     *
     * @return void
     */
    public function getAddress()
    {
        $addressStored = $this->first();
        return [
            "companyName"   => $addressStored->companyName,
            "street1"       => $addressStored->street1,
            "street2"       => $addressStored->street2,
            "postalcode"    => $addressStored->postalcode,
            "city"          => $addressStored->city,
            "state"         => $addressStored->state,
            "country"       => $addressStored->country,
            "telephone"     => $addressStored->telephone,
            "email"         => $addressStored->email
        ];
    }
}
