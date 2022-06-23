<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Stickers;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;
use Manuylenko\Telegram\Bot\Api\Entities\PhotoSize;

/**
 * @link https://core.telegram.org/bots/api#stickerset
 *
 * @method    string getName()
 * @method    string getTitle()
 * @method      bool getIsAnimated()
 * @method      bool getIsVideo()
 * @method      bool getContainsMasks()
 * @method Sticker[] getStickers()
 * @method PhotoSize getThumb()
 */
class StickerSet extends Entity
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'stickers' => [Sticker::class],
            'thumb' => PhotoSize::class
        ];
    }
}
