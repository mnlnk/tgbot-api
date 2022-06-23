<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Inline\QueryResult;

use Manuylenko\Telegram\Bot\Api\Entities\Inline\Content\InputMessageContent;
use Manuylenko\Telegram\Bot\Api\Entities\Keyboards\InlineKeyboardMarkup;
use Manuylenko\Telegram\Bot\Api\Entities\MessageEntity;

/**
 * @link https://core.telegram.org/bots/api#inlinequeryresultaudio
 *
 * @method                    string getType()
 * @method                    string getId()
 * @method                    string getAudioUrl()
 * @method                    string getTitle()
 * @method               string|null getCaption()
 * @method               string|null getParseMode()
 * @method      MessageEntity[]|null getCaptionEntities()
 * @method               string|null getPerformer()
 * @method                  int|null getAudioDuration()
 * @method InlineKeyboardMarkup|null getReplyMarkup()
 * @method  InputMessageContent|null getInputMessageContent()
 *
 * @method                     $this setType(string $type)
 * @method                     $this setId(string $id)
 * @method                     $this setAudioUrl(string $audioUrl)
 * @method                     $this setTitle(string $title)
 * @method                     $this setCaption(string $caption)
 * @method                     $this setParseMode(string $parseMode)
 * @method                     $this setCaptionEntities(MessageEntity[] $captionEntities)
 * @method                     $this setPerformer(string $performer)
 * @method                     $this setAudioDuration(int $audioDuration)
 * @method                     $this setReplyMarkup(InlineKeyboardMarkup $replyMarkup)
 * @method                     $this setInputMessageContent(InputMessageContent $inputMessageContent)
 */
class InlineQueryResultAudio extends InlineQueryResult
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
	 * @param string $audioUrl
	 * @param string $title
	 * @param string|null $caption
	 * @param string|null $parseMode
	 * @param MessageEntity[]|null $captionEntities
	 * @param string|null $performer
	 * @param string|null $audioDuration
	 * @param InlineKeyboardMarkup|null $replyMarkup
	 * @param InputMessageContent|null $inputMessageContent
	 *
	 * @return $this
	 */
	public static function make(
		$id,
		$audioUrl,
		$title,
		$caption = null,
		$parseMode = null,
        $captionEntities = null,
		$performer = null,
		$audioDuration = null,
		$replyMarkup = null,
		$inputMessageContent = null
	) {
		return new static([
			'type' => InlineQueryResult::T_AUDIO,
			'id' => $id,
			'audio_url' => $audioUrl,
			'title' => $title,
			'caption' => $caption,
			'parse_mode' => $parseMode,
			'caption_entities' => $captionEntities,
			'performer' => $performer,
			'audio_duration' => $audioDuration,
			'reply_markup' => $replyMarkup,
			'input_message_content' => $inputMessageContent
		]);
	}
}
