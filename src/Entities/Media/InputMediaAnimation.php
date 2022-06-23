<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Media;

use Manuylenko\Telegram\Bot\Api\Entities\InputFile;
use Manuylenko\Telegram\Bot\Api\Entities\MessageEntity;

/**
 * @link https://core.telegram.org/bots/api#inputmediaanimation
 *
 * @method                string getType()
 * @method                string getMedia()
 * @method string|InputFile|null getThumb()
 * @method           string|null getCaption()
 * @method           string|null getParseMode()
 * @method  MessageEntity[]|null getCaptionEntities()
 * @method              int|null getWidth()
 * @method              int|null getHeight()
 * @method              int|null getDuration()
 *
 * @method                 $this setType(string $type)
 * @method                 $this setMedia(string $media)
 * @method                 $this setThumb(string|InputFile $thumb)
 * @method                 $this setCaption(string $caption)
 * @method                 $this setParseMode(string $parseMode)
 * @method                 $this setCaptionEntities(MessageEntity[] $captionEntities)
 * @method                 $this setWidth(int $width)
 * @method                 $this setHeight(int $height)
 * @method                 $this setDuration(int $duration)
 */
class InputMediaAnimation extends InputMedia
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'caption_entities' => [MessageEntity::class]
        ];
    }

    /**
     * @param string $media
     * @param string|InputFile|null $thumb
     * @param string|null $caption
     * @param string|null $parseMode
     * @param MessageEntity[]|null $captionEntities
     * @param int|null $width
     * @param int|null $height
     * @param int|null $duration
     *
     * @return $this
     */
    public static function make(
        $media,
        $thumb = null,
        $caption = null,
        $parseMode = null,
        $captionEntities = null,
        $width = null,
        $height = null,
        $duration = null
    ) {
        return new static([
            'type' => InputMedia::T_ANIMATION,
            'media' => $media,
            'thumb' => $thumb,
            'caption' => $caption,
            'parse_mode' => $parseMode,
            'caption_entities' => $captionEntities,
            'width' => $width,
            'height' => $height,
            'duration' => $duration
        ]);
    }
}
