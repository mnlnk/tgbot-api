<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Inline\QueryResult;

use Manuylenko\Telegram\Bot\Api\Entities\Inline\Content\InputMessageContent;
use Manuylenko\Telegram\Bot\Api\Entities\Keyboards\InlineKeyboardMarkup;
use Manuylenko\Telegram\Bot\Api\Entities\MessageEntity;

/**
 * @link https://core.telegram.org/bots/api#inlinequeryresultcachedgif
 *
 * @method                    string getType()
 * @method                    string getId()
 * @method                    string getGifFileId()
 * @method               string|null getTitle()
 * @method               string|null getCaption()
 * @method               string|null getParseMode()
 * @method      MessageEntity[]|null getCaptionEntities()
 * @method InlineKeyboardMarkup|null getReplyMarkup()
 * @method  InputMessageContent|null getInputMessageContent()
 *
 * @method                     $this setType(string $type)
 * @method                     $this setId(string $id)
 * @method                     $this setGifFileId(string $gifFileId)
 * @method                     $this setTitle(string $title)
 * @method                     $this setCaption(string $caption)
 * @method                     $this setParseMode(string $parseMode)
 * @method                     $this setCaptionEntities(MessageEntity[] $captionEntities)
 * @method                     $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup)
 * @method                     $this setInputMessageContent(InputMessageContent $inputMessageContent)
 */
class InlineQueryResultCachedGif extends InlineQueryResult
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'caption_entities' => [MessageEntity::class],
            'reply_markup' => InlineKeyboardMarkup::class,
            'input_message_content' => InputMessageContent::class
        ];
    }

	/**
	 * @param string $id
	 * @param string $gifFileId
	 * @param string|null $title
	 * @param string|null $caption
	 * @param string|null $parseMode
     * @param MessageEntity[]|null $captionEntities
	 * @param InlineKeyboardMarkup|null $replyMarkup
	 * @param InputMessageContent|null $inputMessageContent
	 *
	 * @return $this
	 */
	public static function make(
		$id,
		$gifFileId,
		$title = null,
		$caption = null,
		$parseMode = null,
        $captionEntities = null,
		$replyMarkup = null,
		$inputMessageContent = null
	) {
		return new static([
			'type' => InlineQueryResult::T_GIF,
			'id' => $id,
			'gif_file_id' => $gifFileId,
			'title' => $title,
			'caption' => $caption,
			'parse_mode' => $parseMode,
            'caption_entities' => $captionEntities,
			'reply_markup' => $replyMarkup,
			'input_message_content' => $inputMessageContent
		]);
	}
}
