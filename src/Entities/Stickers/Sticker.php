<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Stickers;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;
use Manuylenko\Telegram\Bot\Api\Entities\File;
use Manuylenko\Telegram\Bot\Api\Entities\PhotoSize;

/**
 * @link https://core.telegram.org/bots/api#sticker
 *
 * @method            string getFileId()
 * @method            string getFileUniqueId()
 * @method               int getWidth()
 * @method               int getHeight()
 * @method              bool getIsAnimated()
 * @method              bool getIsVideo()
 * @method    PhotoSize|null getThumb()
 * @method       string|null getEmoji()
 * @method       string|null getSetName()
 * @method         File|null getPremiumAnimation()
 * @method MaskPosition|null getMaskPosition()
 * @method          int|null getFileSize()
 */
class Sticker extends Entity
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'thumb' => PhotoSize::class,
            'premium_animation ' => File::class,
            'mask_position' => MaskPosition::class
        ];
    }
}
