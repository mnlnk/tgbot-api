<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Inline;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;
use Manuylenko\Telegram\Bot\Api\Entities\Location;
use Manuylenko\Telegram\Bot\Api\Entities\User;

/**
 * @link https://core.telegram.org/bots/api#choseninlineresult
 *
 * @method        string getResultId()
 * @method          User getFrom()
 * @method Location|null getLocation()
 * @method   string|null getInlineMessageId()
 * @method        string getQuery()
 */
class ChosenInlineResult extends Entity
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
