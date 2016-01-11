<?php

namespace LukePOLO\LaraCart;

/**
 * Class CartShipping
 *
 * @package LukePOLO\LaraCart
 */
class CartShipping
{

    public $shipModeId;
    public $pickUpStoreId;
    public $shippingTo;
    public $PersonTitle;
    public $Firstname;
    public $Lastname;
    public $Street;
    public $Housenumber;
    public $StreetAdditional;
    public $ZipCode;
    public $City;
    public $country;


    /**
     * CartShipping constructor.
     * @param $shipModeId
     * @param $pickUpStoreId
     * @param $shippingTo
     * @param $PersonTitle
     * @param $Firstname
     * @param $Lastname
     * @param $Street
     * @param $Housenumber
     * @param $StreetAdditional
     * @param $ZipCode
     * @param $City
     * @param $country
     */
    public function __construct($shipModeId, $pickUpStoreId, $shippingTo, $PersonTitle, $Firstname, $Lastname, $Street, $Housenumber, $StreetAdditional, $ZipCode, $City, $country)
    {
        $this->shipModeId = $shipModeId;
        $this->pickUpStoreId = $pickUpStoreId;
        $this->shippingTo = $shippingTo;
        $this->PersonTitle = $PersonTitle;
        $this->Firstname = $Firstname;
        $this->Lastname = $Lastname;
        $this->Street = $Street;
        $this->Housenumber = $Housenumber;
        $this->StreetAdditional = $StreetAdditional;
        $this->ZipCode = $ZipCode;
        $this->City = $City;
        $this->country = $country;
    }

}
