<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Passport;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;

/**
 * @link https://core.telegram.org/passport#credentials
 *
 * @method SecureData getSecureData()
 * @method     string getNonce()
 */
class Credentials extends Entity
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'secure_data' => SecureData::class
        ];
    }
}
