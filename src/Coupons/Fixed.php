<?php

namespace LukePOLO\LaraCart\Coupons;

use LukePOLO\LaraCart\Contracts\CouponContract;
use LukePOLO\LaraCart\Traits\CouponTrait;

/**
 * Class Fixed
 *
 * @package LukePOLO\LaraCart\Coupons
 */
class Fixed implements CouponContract
{
    use CouponTrait;

    public $code;
    public $value;

    /**
     * Fixed constructor.
     *
     * @param $code
     * @param $value
     * @param array $options
     */
    public function __construct($code, $value, $options = [])
    {
        $this->code = $code;
        $this->value = $value;

        $this->setOptions($options);
    }

    /**
     * Gets the discount amount
     *
     * @return string
     */
    public function discount()
    {
        return $this->value;
    }

    /**
     * Displays the value in a money format
     *
     * @param null $locale
     * @param null $internationalFormat
     * @return string
     */
    public function displayValue($locale = null, $internationalFormat = null)
    {
        return \App::make(\LukePOLO\Laracart\LaraCart::SERVICE)->formatMoney(
            $this->value,
            $locale,
            $internationalFormat
        );
    }
}
