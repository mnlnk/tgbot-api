<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Inline\QueryResult;

use Manuylenko\Telegram\Bot\Api\Entities\Inline\Content\InputMessageContent;
use Manuylenko\Telegram\Bot\Api\Entities\Keyboards\InlineKeyboardMarkup;
use Manuylenko\Telegram\Bot\Api\Entities\MessageEntity;

/**
 * @link https://core.telegram.org/bots/api#inlinequeryresultcacheddocument
 *
 * @method                    string getType()
 * @method                    string getId()
 * @method                    string getTitle()
 * @method                    string getDocumentFileId()
 * @method               string|null getDescription()
 * @method               string|null getCaption()
 * @method               string|null getParseMode()
 * @method      MessageEntity[]|null getCaptionEntities()
 * @method InlineKeyboardMarkup|null getReplyMarkup()
 * @method  InputMessageContent|null getInputMessageContent()
 *
 * @method                     $this setType(string $type)
 * @method                     $this setId(string $id)
 * @method                     $this setTitle(string $title)
 * @method                     $this setDocumentFileId(string $documentFileId)
 * @method                     $this setDescription(string $description)
 * @method                     $this setCaption(string $caption)
 * @method                     $this setParseMode(string $parseMode)
 * @method                     $this setCaptionEntities(MessageEntity[] $captionEntities)
 * @method                     $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup)
 * @method                     $this setInputMessageContent(InputMessageContent $inputMessageContent)
 */
class InlineQueryResultCachedDocument extends InlineQueryResult
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
	 * @param string $title
	 * @param string $documentFileId
	 * @param string|null $description
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
		$title,
		$documentFileId,
		$description = null,
		$caption = null,
		$parseMode = null,
        $captionEntities = null,
		$replyMarkup = null,
		$inputMessageContent = null
	) {
		return new static([
			'type' => InlineQueryResult::T_DOCUMENT,
			'id' => $id,
			'title' => $title,
			'document_file_id' => $documentFileId,
			'caption' => $caption,
			'parse_mode' => $parseMode,
            'caption_entities' => $captionEntities,
			'description' => $description,
			'reply_markup' => $replyMarkup,
			'input_message_content' => $inputMessageContent,
		]);
	}
}
