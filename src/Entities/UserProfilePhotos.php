<?php

namespace Manuylenko\Telegram\Bot\Api\Entities;

/**
 * @link https://core.telegram.org/bots/api#userprofilephotos
 *
 * @method int getTotalCount()
 */
class UserProfilePhotos extends Entity
{
    /**
     * @return PhotoSize[][]
     */
    public function getPhotos()
    {
        return $this->getArrayOfArray('photos', PhotoSize::class);
    }
}
