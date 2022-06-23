<?php

namespace Manuylenko\Telegram\Bot\Api\Entities;

/**
 * @link https://core.telegram.org/bots/api#chatlocation
 *
 * @method Location getLocation()
 * @method   string getAddress()
 */
class ChatLocation extends Entity
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'location' => Location::class
        ];
    }
}
