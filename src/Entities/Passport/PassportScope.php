<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Passport;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;
use Manuylenko\Telegram\Bot\Api\Entities\Passport\Elements\Scopes\PassportScopeElement;

/**
 * @link https://core.telegram.org/passport#passportscope
 *
 * @method PassportScopeElement[] getData()
 * @method                    int getV()
 */
class PassportScope extends Entity
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'data' => [PassportScopeElement::class]
        ];
    }
}
