<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Poll;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;
use Manuylenko\Telegram\Bot\Api\Entities\User;

/**
 * @link https://core.telegram.org/bots/api#pollanswer
 *
 * @method string getPollId()
 * @method   User getUser()
 * @method  int[] getOptionIds()
 */
class PollAnswer extends Entity
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'user' => User::class
        ];
    }
}
