<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Media;

use Manuylenko\Telegram\Bot\Api\Entities\InputFile;
use Manuylenko\Telegram\Bot\Api\Entities\MessageEntity;

/**
 * @link https://core.telegram.org/bots/api#inputmediaaudio
 *
 * @method                string getType()
 * @method                string getMedia()
 * @method string|InputFile|null getThumb()
 * @method           string|null getCaption()
 * @method           string|null getParseMode()
 * @method  MessageEntity[]|null getCaptionEntities()
 * @method              int|null getDuration()
 * @method           string|null getPerformer()
 * @method           string|null getTitle()
 *
 * @method                 $this setType(string $type)
 * @method                 $this setMedia(string $media)
 * @method                 $this setThumb(string|InputFile $thumb)
 * @method                 $this setCaption(string $caption)
 * @method                 $this setParseMode(string $parseMode)
 * @method                 $this setCaptionEntities(MessageEntity[] $captionEntities)
 * @method                 $this setDuration(int $duration)
 * @method                 $this setPerformer(string $performer)
 * @method                 $this setTitle(string $title)
 */
class InputMediaAudio extends InputMedia
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
     * @param int|null $duration
     * @param string|null $performer
     * @param string|null $title
     *
     * @return $this
     */
    public static function make(
        $media,
        $thumb = null,
        $caption = null,
        $parseMode = null,
        $captionEntities = null,
        $duration = null,
        $performer = null,
        $title = null
    ) {
        return new static([
            'type' => InputMedia::T_AUDIO,
            'media' => $media,
            'thumb' => $thumb,
            'caption' => $caption,
            'parse_mode' => $parseMode,
            'caption_entities' => $captionEntities,
            'duration' => $duration,
            'performer' => $performer,
            'title' => $title
        ]);
    }
}
