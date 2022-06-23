<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Inline\QueryResult;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;

/**
 * @link https://core.telegram.org/bots/api#inlinequeryresult
 */
abstract class InlineQueryResult extends Entity
{
    /**
     * Mime Types
     */
	const MT_HTML = 'text/html';
	const MT_MP4 = 'video/mp4';
    const MT_JPEG = 'image/jpeg';
    const MT_GIF = 'image/gif';
	const MT_PDF = 'application/pdf';
	const MT_ZIP = 'application/zip';

    /**
     * Types
     */
	const T_ARTICLE = 'article';
	const T_AUDIO = 'audio';
	const T_CONTACT = 'contact';
	const T_DOCUMENT = 'document';
	const T_GAME = 'game';
	const T_GIF = 'gif';
	const T_LOCATION = 'location';
	const T_MPEG4_GIF = 'mpeg4_gif';
	const T_PHOTO = 'photo';
	const T_STICKER = 'sticker';
	const T_VENUE = 'venue';
	const T_VIDEO = 'video';
	const T_VOICE = 'voice';
}
