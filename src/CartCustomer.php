<?php

namespace LukePOLO\LaraCart;

/**
 * Class CartCustomer
 *
 * @package LukePOLO\LaraCart
 */
class CartCustomer
{

    public $PersonTitle;
    public $Firstname;
    public $Lastname;
    public $Street;
    public $Housenumber;
    public $StreetAdditional;
    public $ZipCode;
    public $City;
    public $country;
    public $Phone;
    public $CellPhone;
    public $email;
    public $isGuestUser;
    public $logonPassword;

    /**
     * CartCustomer constructor.
     *
     * @param $PersonTitle
     * @param $Firstname
     * @param $Lastname
     * @param $Street
     * @param $Housenumber
     * @param $StreetAdditional
     * @param $ZipCode
     * @param $City
     * @param $country
     * @param $Phone
     * @param $CellPhone
     * @param $email
     * @param $logonPassword
     */
    public function __construct($PersonTitle, $Firstname, $Lastname, $Street, $Housenumber, $StreetAdditional, $ZipCode, $City, $country, $Phone, $CellPhone, $email, $isGuestUser, $logonPassword)
    {
        $this->PersonTitle = $PersonTitle;
        $this->Firstname = $Firstname;
        $this->Lastname = $Lastname;
        $this->Street = $Street;
        $this->Housenumber = $Housenumber;
        $this->StreetAdditional = $StreetAdditional;
        $this->ZipCode = $ZipCode;
        $this->City = $City;
        $this->country = $country;
        $this->Phone = $Phone;
        $this->CellPhone = $CellPhone;
        $this->email = $email;
        $this->isGuestUser = $isGuestUser;
        $this->logonPassword = $logonPassword;
    }

}
