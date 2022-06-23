<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Passport;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;
use Manuylenko\Telegram\Bot\Api\Entities\Passport\Elements\EncryptedPassportElement;

/**
 * @link https://core.telegram.org/bots/api#passportdata
 *
 * @method EncryptedPassportElement[] getData()
 * @method       EncryptedCredentials getCredentials()
 */
class PassportData extends Entity
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'data' => [EncryptedPassportElement::class],
            'credentials' => EncryptedCredentials::class
        ];
    }
}
