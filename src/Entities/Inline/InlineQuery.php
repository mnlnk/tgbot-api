<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Inline;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;
use Manuylenko\Telegram\Bot\Api\Entities\Location;
use Manuylenko\Telegram\Bot\Api\Entities\User;

/**
 * @link https://core.telegram.org/bots/api#inlinequery
 *
 * @method        string getId()
 * @method          User getFrom()
 * @method        string getQuery()
 * @method        string getOffset()
 * @method   string|null getChatType()
 * @method Location|null getLocation()
 */
class InlineQuery extends Entity
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'from' => User::class,
            'location' => Location::class
        ];
    }
}
