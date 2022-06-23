<?php

namespace Manuylenko\Telegram\Bot\Api\Entities;

/**
 * @link https://core.telegram.org/bots/api#messageentity
 *
 * @method      string getType()
 * @method         int getOffset()
 * @method         int getLength()
 * @method string|null getUrl()
 * @method   User|null getUser()
 * @method string|null getLanguage()
 *
 * @method       $this setType(string $type)
 * @method       $this setOffset(int $offset)
 * @method       $this setLength(int $length)
 * @method       $this setUrl(string $url)
 * @method       $this setUser(User $user)
 * @method       $this setLanguage(string $language)
 */
class MessageEntity extends Entity
{
    /**
     * Types
     */
	const T_MENTION = 'mention';
	const T_HASHTAG = 'hashtag';
	const T_CASHTAG = 'cashtag';
	const T_BOT_COMMAND = 'bot_command';
	const T_URL = 'url';
	const T_EMAIL = 'email';
	const T_PHONE_NUMBER = 'phone_number';
	const T_BOLD = 'bold';
	const T_ITALIC = 'italic';
	const T_UNDERLINE = 'underline';
	const T_STRIKETHROUGH = 'strikethrough';
    const T_SPOILER = 'spoiler';
	const T_CODE = 'code';
	const T_PRE = 'pre';
	const T_TEXT_LINK = 'text_link';
	const T_TEXT_MENTION = 'text_mention';


    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'user' => User::class
        ];
    }

    /**
     * @param string $type
     * @param int $offset
     * @param int $length
     * @param string|null $url
     * @param User|null $user
     * @param string|null $language
     *
     * @return $this
     */
    public static function make(
        $type,
        $offset,
        $length,
        $url = null,
        $user = null,
        $language = null
    ) {
        return new static([
            'type' => $type,
            'offset' => $offset,
            'length' => $length,
            'url' => $url,
            'user' => $user,
            'language' => $language
        ]);
    }

    /**
     * @return bool
     */
    public function isMention()
    {
        return $this->getType() == self::T_MENTION;
    }

    /**
     * @return bool
     */
    public function isHashtag()
    {
        return $this->getType() == self::T_HASHTAG;
    }

    /**
     * @return bool
     */
    public function isCashtag()
    {
        return $this->getType() == self::T_CASHTAG;
    }

    /**
     * @return bool
     */
    public function isBotCommand()
    {
        return $this->getType() == self::T_BOT_COMMAND;
    }

    /**
     * @return bool
     */
    public function isUrl()
    {
        return $this->getType() == self::T_URL;
    }

    /**
     * @return bool
     */
    public function isEmail()
    {
        return $this->getType() == self::T_EMAIL;
    }

    /**
     * @return bool
     */
    public function isPhoneNumber()
    {
        return $this->getType() == self::T_PHONE_NUMBER;
    }

    /**
     * @return bool
     */
    public function isBold()
    {
        return $this->getType() == self::T_BOLD;
    }

    /**
     * @return bool
     */
    public function isItalic()
    {
        return $this->getType() == self::T_ITALIC;
    }

    /**
     * @return bool
     */
    public function isUnderline()
    {
        return $this->getType() == self::T_UNDERLINE;
    }

    /**
     * @return bool
     */
    public function isStrikethrough()
    {
        return $this->getType() == self::T_STRIKETHROUGH;
    }

    /**
     * @return bool
     */
    public function isSpoiler()
    {
        return $this->getType() == self::T_SPOILER;
    }

    /**
     * @return bool
     */
    public function isCode()
    {
        return $this->getType() == self::T_CODE;
    }

    /**
     * @return bool
     */
    public function isPre()
    {
        return $this->getType() == self::T_PRE;
    }

    /**
     * @return bool
     */
    public function isTextLink()
    {
        return $this->getType() == self::T_TEXT_LINK;
    }

    /**
     * @return bool
     */
    public function isTextMention()
    {
        return $this->getType() == self::T_TEXT_MENTION;
    }
}
