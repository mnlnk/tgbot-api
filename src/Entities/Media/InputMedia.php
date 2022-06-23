<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Media;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;

/**
 * @link https://core.telegram.org/bots/api#inputmedia
 */
abstract class InputMedia extends Entity
{
    /**
     * Types
     */
	const T_PHOTO = 'photo';
	const T_VIDEO = 'video';
	const T_ANIMATION = 'animation';
	const T_AUDIO = 'audio';
	const T_DOCUMENT = 'document';
}
