<?php

namespace Manuylenko\Telegram\Bot\Api\Entities;

use Manuylenko\Telegram\Bot\Api\Entities\Inline\ChosenInlineResult;
use Manuylenko\Telegram\Bot\Api\Entities\Inline\InlineQuery;
use Manuylenko\Telegram\Bot\Api\Entities\Passport\PassportData;
use Manuylenko\Telegram\Bot\Api\Entities\Payments\PreCheckoutQuery;
use Manuylenko\Telegram\Bot\Api\Entities\Payments\ShippingQuery;
use Manuylenko\Telegram\Bot\Api\Entities\Poll\Poll;
use Manuylenko\Telegram\Bot\Api\Entities\Poll\PollAnswer;

/**
 * @link https://core.telegram.org/bots/api#update
 *
 * @method                     int getUpdateId()
 * @method            Message|null getMessage()
 * @method            Message|null getEditedMessage()
 * @method            Message|null getChannelPost()
 * @method            Message|null getEditedChannelPost()
 * @method        InlineQuery|null getInlineQuery()
 * @method ChosenInlineResult|null getChosenInlineResult()
 * @method      CallbackQuery|null getCallbackQuery()
 * @method      ShippingQuery|null getShippingQuery()
 * @method   PreCheckoutQuery|null getPreCheckoutQuery()
 * @method       PassportData|null getPassportData()
 * @method               Poll|null getPoll()
 * @method         PollAnswer|null getPollAnswer()
 * @method  ChatMemberUpdated|null getMyChatMember()
 * @method  ChatMemberUpdated|null getChatMember()
 * @method    ChatJoinRequest|null getChatJoinRequest()
 */
class Update extends Entity
{
    /**
     * Types
     */
	const T_MESSAGE = 'message';
	const T_EDITED_MESSAGE = 'edited_message';
	const T_CHANNEL_POST = 'channel_post';
	const T_EDITED_CHANNEL_POST = 'edited_channel_post';
	const T_INLINE_QUERY = 'inline_query';
	const T_CHOSEN_INLINE_RESULT = 'chosen_inline_result';
	const T_CALLBACK_QUERY = 'callback_query';
	const T_SHIPPING_QUERY = 'shipping_query';
	const T_PRE_CHECKOUT_QUERY = 'pre_checkout_query';
    const T_PASSPORT_DATA = 'passport_data';
	const T_POLL = 'poll';
	const T_POLL_ANSWER = 'poll_answer';
	const T_MY_CHAT_MEMBER = 'my_chat_member';
	const T_CHAT_MEMBER = 'chat_member';
	const T_CHAT_JOIN_REQUEST = 'chat_join_request';
    const T_ALL = '';


    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'message' => Message::class,
            'edited_message' => Message::class,
            'channel_post' => Message::class,
            'edited_channel_post' => Message::class,
            'inline_query' => InlineQuery::class,
            'chosen_inline_result' => ChosenInlineResult::class,
            'callback_query' => CallbackQuery::class,
            'shipping_query' => ShippingQuery::class,
            'pre_checkout_query' => PreCheckoutQuery::class,
            'passport_data' => PassportData::class,
            'poll' => Poll::class,
            'poll_answer' => PollAnswer::class,
            'my_chat_member' => ChatMemberUpdated::class,
            'chat_member' => ChatMemberUpdated::class,
            'chat_join_request' => ChatJoinRequest::class
        ];
    }

	/**
	 * @return string|null
	 */
	public function getType()
    {
		$types = [
            self::T_MESSAGE,
            self::T_EDITED_MESSAGE,
            self::T_CHANNEL_POST,
            self::T_EDITED_CHANNEL_POST,
            self::T_INLINE_QUERY,
            self::T_CHOSEN_INLINE_RESULT,
            self::T_CALLBACK_QUERY,
            self::T_SHIPPING_QUERY,
            self::T_PRE_CHECKOUT_QUERY,
            self::T_PASSPORT_DATA,
            self::T_POLL,
            self::T_POLL_ANSWER,
            self::T_MY_CHAT_MEMBER,
            self::T_CHAT_MEMBER,
            self::T_CHAT_JOIN_REQUEST
		];

		foreach ($types as $type) {
			if ($this->has($type)) return $type;
		}

		return null;
	}

    /**
     * @return bool
     */
    public function isMessage()
    {
        return $this->getType() == self::T_MESSAGE;
    }

    /**
     * @return bool
     */
    public function isEditedMessage()
    {
        return $this->getType() == self::T_EDITED_MESSAGE;
    }

    /**
     * @return bool
     */
    public function isChannelPost()
    {
        return $this->getType() == self::T_CHANNEL_POST;
    }

    /**
     * @return bool
     */
    public function isEditedChannelPost()
    {
        return $this->getType() == self::T_EDITED_CHANNEL_POST;
    }

    /**
     * @return bool
     */
    public function isInlineQuery()
    {
        return $this->getType() == self::T_INLINE_QUERY;
    }

    /**
     * @return bool
     */
    public function isChosenInlineResult()
    {
        return $this->getType() == self::T_CHOSEN_INLINE_RESULT;
    }

    /**
     * @return bool
     */
    public function isCallbackQuery()
    {
        return $this->getType() == self::T_CALLBACK_QUERY;
    }

    /**
     * @return bool
     */
    public function isShippingQuery()
    {
        return $this->getType() == self::T_SHIPPING_QUERY;
    }

    /**
     * @return bool
     */
    public function isPreCheckoutQuery()
    {
        return $this->getType() == self::T_PRE_CHECKOUT_QUERY;
    }

    /**
     * @return bool
     */
    public function isPassportData()
    {
        return $this->getType() == self::T_PASSPORT_DATA;
    }

    /**
     * @return bool
     */
    public function isPoll()
    {
        return $this->getType() == self::T_POLL;
    }

    /**
     * @return bool
     */
    public function isPollAnswer()
    {
        return $this->getType() == self::T_POLL_ANSWER;
    }

    /**
     * @return bool
     */
    public function isMyChatMember()
    {
        return $this->getType() == self::T_MY_CHAT_MEMBER;
    }

    /**
     * @return bool
     */
    public function isChatMember()
    {
        return $this->getType() == self::T_CHAT_MEMBER;
    }

    /**
     * @return bool
     */
    public function isChatJoinRequest()
    {
        return $this->getType() == self::T_CHAT_JOIN_REQUEST;
    }
}
