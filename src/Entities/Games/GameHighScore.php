<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Games;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;
use Manuylenko\Telegram\Bot\Api\Entities\User;

/**
 * @link https://core.telegram.org/bots/api#gamehighscore
 *
 * @method  int getPosition()
 * @method User getUser()
 * @method  int getScore()
 */
class GameHighScore extends Entity
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
