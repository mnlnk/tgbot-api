<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Payments;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;

/**
 * @link https://core.telegram.org/bots/api#orderinfo
 *
 * @method          string|null getName()
 * @method          string|null getPhoneNumber()
 * @method          string|null getEmail()
 * @method ShippingAddress|null getShippingAddress()
 */
class OrderInfo extends Entity
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'shipping_address' => ShippingAddress::class
        ];
    }
}
