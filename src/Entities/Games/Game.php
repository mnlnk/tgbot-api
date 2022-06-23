<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Games;

use Manuylenko\Telegram\Bot\Api\Entities\Animation;
use Manuylenko\Telegram\Bot\Api\Entities\Entity;
use Manuylenko\Telegram\Bot\Api\Entities\MessageEntity;
use Manuylenko\Telegram\Bot\Api\Entities\PhotoSize;

/**
 * @link https://core.telegram.org/bots/api#game
 *
 * @method               string getTitle()
 * @method               string getDescription()
 * @method          PhotoSize[] getPhoto()
 * @method          string|null getText()
 * @method MessageEntity[]|null getTextEntities()
 * @method       Animation|null getAnimation()
 */
class Game extends Entity
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'photo' => [PhotoSize::class],
            'text_entities' => [MessageEntity::class],
            'animation' => Animation::class
        ];
    }
}
