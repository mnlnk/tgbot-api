<?php

namespace Manuylenko\Telegram\Bot\Api\Entities;

use Manuylenko\Telegram\Bot\Api\Entities\Games\Game;
use Manuylenko\Telegram\Bot\Api\Entities\Keyboards\InlineKeyboardMarkup;
use Manuylenko\Telegram\Bot\Api\Entities\Passport\PassportData;
use Manuylenko\Telegram\Bot\Api\Entities\Payments\Invoice;
use Manuylenko\Telegram\Bot\Api\Entities\Payments\SuccessfulPayment;
use Manuylenko\Telegram\Bot\Api\Entities\Poll\Poll;
use Manuylenko\Telegram\Bot\Api\Entities\Stickers\Sticker;

/**
 * @link https://core.telegram.org/bots/api#message
 *
 * @method                                int getMessageId()
 * @method                          User|null getFrom()
 * @method                                int getDate()
 * @method                               Chat getChat()
 * @method                          Chat|null getSenderChat()
 * @method                          User|null getForwardFrom()
 * @method                          Chat|null getForwardFromChat()
 * @method                           int|null getForwardFromMessageId()
 * @method                        string|null getForwardSignature()
 * @method                        string|null getForwardSenderName()
 * @method                           int|null getForwardDate()
 * @method                          bool|null getIsAutomaticForward()
 * @method                       Message|null getReplyToMessage()
 * @method                          User|null getViaBot()
 * @method                           int|null getEditDate()
 * @method                          bool|null getHasProtectedContent()
 * @method                        string|null getMediaGroupId()
 * @method                        string|null getAuthorSignature()
 * @method                        string|null getText()
 * @method               MessageEntity[]|null getEntities()
 * @method                         Audio|null getAudio()
 * @method                      Document|null getDocument()
 * @method                     Animation|null getAnimation()
 * @method                          Game|null getGame()
 * @method                   PhotoSize[]|null getPhoto()
 * @method                       Sticker|null getSticker()
 * @method                         Video|null getVideo()
 * @method                         Voice|null getVoice()
 * @method                     VideoNote|null getVideoNote()
 * @method                        string|null getCaption()
 * @method               MessageEntity[]|null getCaptionEntities()
 * @method                       Contact|null getContact()
 * @method                      Location|null getLocation()
 * @method                         Venue|null getVenue()
 * @method                          Poll|null getPoll()
 * @method                          Dice|null getDice()
 * @method                        User[]|null getNewChatMembers()
 * @method                          User|null getLeftChatMember()
 * @method                        string|null getNewChatTitle()
 * @method                   PhotoSize[]|null getNewChatPhoto()
 * @method                          bool|null getDeleteChatPhoto()
 * @method                          bool|null getGroupChatCreated()
 * @method                          bool|null getSupergroupChatCreated()
 * @method                          bool|null getChannelChatCreated()
 * @method MessageAutoDeleteTimerChanged|null getMessageAutoDeleteTimerChanged()
 * @method                           int|null getMigrateToChatId()
 * @method                           int|null getMigrateFromChatId()
 * @method                       Message|null getPinnedMessage()
 * @method                       Invoice|null getInvoice()
 * @method             SuccessfulPayment|null getSuccessfulPayment()
 * @method                        string|null getConnectedWebsite()
 * @method                  PassportData|null getPassportData()
 * @method       ProximityAlertTriggered|null getProximityAlertTriggered()
 * @method            VideoChatScheduled|null getVideoChatScheduled()
 * @method              VideoChatStarted|null getVideoChatStarted()
 * @method                VideoChatEnded|null getVideoChatEnded()
 * @method  VideoChatParticipantsInvited|null getVideoChatParticipantsInvited()
 * @method                    WebAppData|null getWebAppData()
 * @method          InlineKeyboardMarkup|null getReplyMarkup()
 */
class Message extends Entity
{
    /**
     * Types
     */
    const T_TEXT = 'text';
	const T_AUDIO = 'audio';
	const T_DOCUMENT = 'document';
	const T_ANIMATION = 'animation';
	const T_GAME = 'game';
	const T_PHOTO = 'photo';
	const T_STICKER = 'sticker';
	const T_VIDEO = 'video';
	const T_VOICE = 'voice';
	const T_VIDEO_NOTE = 'video_note';
	const T_CONTACT = 'contact';
	const T_LOCATION = 'location';
	const T_VENUE = 'venue';
	const T_POLL = 'poll';
	const T_DICE = 'dice';
	const T_NEW_CHAT_MEMBERS = 'new_chat_members';
	const T_LEFT_CHAT_MEMBER = 'left_chat_member';
	const T_NEW_CHAT_TITLE = 'new_chat_title';
	const T_NEW_CHAT_PHOTO = 'new_chat_photo';
	const T_DELETE_CHAT_PHOTO = 'delete_chat_photo';
	const T_GROUP_CHAT_CREATED = 'group_chat_created';
	const T_MESSAGE_AUTO_DELETE_TIMER_CHANGED = 'message_auto_delete_timer_changed';
	const T_SUPERGROUP_CHAT_CREATED = 'supergroup_chat_created';
	const T_CHANNEL_CHAT_CREATED = 'channel_chat_created';
	const T_MIGRATE_TO_CHAT_ID = 'migrate_to_chat_id';
	const T_MIGRATE_FROM_CHAT_ID = 'migrate_from_chat_id';
	const T_PINNED_MESSAGE = 'pinned_message';
	const T_INVOICE = 'invoice';
	const T_SUCCESSFUL_PAYMENT = 'successful_payment';
    const T_PROXIMITY_ALERT_TRIGGERED = 'proximity_alert_triggered';
    const T_VIDEO_CHAT_SCHEDULED = 'video_chat_scheduled';
    const T_VIDEO_CHAT_STARTED = 'video_chat_started';
    const T_VIDEO_CHAT_ENDED = 'video_chat_ended';
    const T_VIDEO_CHAT_PARTICIPANTS_INVITED = 'video_chat_participants_invited';
    const T_WEB_APP_DATA = 'web_app_data';
	const T_UNKNOWN = 'unknown';

    /**
     * Parse Mode
     */
    const PM_MARKDOWN = 'Markdown';
    const PM_MARKDOWN_V2 = 'MarkdownV2';
    const PM_HTML = 'HTML';


    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'from' => User::class,
            'chat' => Chat::class,
            'sender_chat' => Chat::class,
            'forward_from' => User::class,
            'forward_from_chat' => Chat::class,
            'reply_to_message' => Message::class,
            'via_bot' => User::class,
            'entities' => [MessageEntity::class],
            'audio' => Audio::class,
            'document' => Document::class,
            'animation' => Animation::class,
            'game' => Game::class,
            'photo' => [PhotoSize::class],
            'sticker' => Sticker::class,
            'video' => Video::class,
            'voice' => Voice::class,
            'video_note' => VideoNote::class,
            'caption_entities' => [MessageEntity::class],
            'contact' => Contact::class,
            'location' => Location::class,
            'venue' => Venue::class,
            'poll' => Poll::class,
            'dice' => Dice::class,
            'new_chat_members' => [User::class],
            'left_chat_member' => User::class,
            'new_chat_photo' => [PhotoSize::class],
            'message_auto_delete_timer_changed' => MessageAutoDeleteTimerChanged::class,
            'pinned_message' => Message::class,
            'invoice' => Invoice::class,
            'successful_payment' => SuccessfulPayment::class,
            'passport_data' => PassportData::class,
            'proximity_alert_triggered' => ProximityAlertTriggered::class,
            'video_chat_scheduled' => VideoChatScheduled::class,
            'video_chat_started' => VideoChatStarted::class,
            'video_chat_ended' => VideoChatEnded::class,
            'video_chat_participants_invited' => VideoChatParticipantsInvited::class,
            'web_app_data' => WebAppData::class,
            'reply_markup' => InlineKeyboardMarkup::class
        ];
    }

	/**
	 * @return string
	 */
	public function getType()
    {
		$types = [
            self::T_TEXT,
            self::T_AUDIO,
            self::T_ANIMATION,
            self::T_DOCUMENT,
            self::T_GAME ,
            self::T_PHOTO,
            self::T_STICKER,
            self::T_VIDEO,
            self::T_VOICE,
            self::T_VIDEO_NOTE,
            self::T_CONTACT,
            self::T_VENUE,
            self::T_LOCATION,
            self::T_POLL,
            self::T_DICE,
            self::T_NEW_CHAT_MEMBERS,
            self::T_LEFT_CHAT_MEMBER,
            self::T_NEW_CHAT_TITLE,
            self::T_NEW_CHAT_PHOTO,
            self::T_DELETE_CHAT_PHOTO,
            self::T_GROUP_CHAT_CREATED,
            self::T_SUPERGROUP_CHAT_CREATED,
            self::T_CHANNEL_CHAT_CREATED,
            self::T_MESSAGE_AUTO_DELETE_TIMER_CHANGED,
            self::T_MIGRATE_TO_CHAT_ID,
            self::T_MIGRATE_FROM_CHAT_ID,
            self::T_PINNED_MESSAGE,
            self::T_INVOICE,
            self::T_SUCCESSFUL_PAYMENT,
            self::T_PROXIMITY_ALERT_TRIGGERED,
            self::T_VIDEO_CHAT_SCHEDULED,
            self::T_VIDEO_CHAT_STARTED,
            self::T_VIDEO_CHAT_ENDED,
            self::T_VIDEO_CHAT_PARTICIPANTS_INVITED,
            self::T_WEB_APP_DATA
		];

		foreach ($types as $type) {
			if ($this->has($type)) return $type;
		}

		return self::T_UNKNOWN;
	}

    /**
     * @return string|null
     */
    public function getFirstBotCommand()
    {
        $fromCaption = false;
        $entities = $this->getEntities();

        if ($entities == null) {
            $entities = $this->getCaptionEntities();
            $fromCaption = true;

            if ($entities == null) {
                return null;
            }
        }

        foreach ($entities as $entity) {
            if ($entity->isBotCommand()) {
                $string = $fromCaption ? $this->getCaption() : $this->getText();

                return mb_substr($string, $entity->getOffset(), $entity->getLength());
            }
        }

        return null;
    }

    /**
     * @return bool
     */
    public function isText()
    {
        return $this->getType() == self::T_TEXT;
    }

    /**
     * @return bool
     */
    public function isAudio()
    {
        return $this->getType() == self::T_AUDIO;
    }

    /**
     * @return bool
     */
    public function isDocument()
    {
        return $this->getType() == self::T_DOCUMENT;
    }

    /**
     * @return bool
     */
    public function isAnimation()
    {
        return $this->getType() == self::T_ANIMATION;
    }

    /**
     * @return bool
     */
    public function isGame()
    {
        return $this->getType() == self::T_GAME;
    }

    /**
     * @return bool
     */
    public function isPhoto()
    {
        return $this->getType() == self::T_PHOTO;
    }

    /**
     * @return bool
     */
    public function isSticker()
    {
        return $this->getType() == self::T_STICKER;
    }

    /**
     * @return bool
     */
    public function isVideo()
    {
        return $this->getType() == self::T_VIDEO;
    }

    /**
     * @return bool
     */
    public function isVoice()
    {
        return $this->getType() == self::T_VOICE;
    }

    /**
     * @return bool
     */
    public function isVideoNote()
    {
        return $this->getType() == self::T_VIDEO_NOTE;
    }

    /**
     * @return bool
     */
    public function isContact()
    {
        return $this->getType() == self::T_CONTACT;
    }

    /**
     * @return bool
     */
    public function isLocation()
    {
        return $this->getType() == self::T_LOCATION;
    }

    /**
     * @return bool
     */
    public function isVenue()
    {
        return $this->getType() == self::T_VENUE;
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
    public function isDice()
    {
        return $this->getType() == self::T_DICE;
    }

    /**
     * @return bool
     */
    public function isNewChatMembers()
    {
        return $this->getType() == self::T_NEW_CHAT_MEMBERS;
    }

    /**
     * @return bool
     */
    public function isLeftChatMember()
    {
        return $this->getType() == self::T_LEFT_CHAT_MEMBER;
    }

    /**
     * @return bool
     */
    public function isNewChatTitle()
    {
        return $this->getType() == self::T_NEW_CHAT_TITLE;
    }

    /**
     * @return bool
     */
    public function isnNewChatPhoto()
    {
        return $this->getType() == self::T_NEW_CHAT_PHOTO;
    }

    /**
     * @return bool
     */
    public function isDeleteChatPhoto()
    {
        return $this->getType() == self::T_DELETE_CHAT_PHOTO;
    }

    /**
     * @return bool
     */
    public function isGroupChatCreated()
    {
        return $this->getType() == self::T_GROUP_CHAT_CREATED;
    }

    /**
     * @return bool
     */
    public function isSupergroupChatCreated()
    {
        return $this->getType() == self::T_SUPERGROUP_CHAT_CREATED;
    }

    /**
     * @return bool
     */
    public function isChannelChatCreated()
    {
        return $this->getType() == self::T_CHANNEL_CHAT_CREATED;
    }

    /**
     * @return bool
     */
    public function isMessageAutoDeleteTimerChanged()
    {
        return $this->getType() == self::T_MESSAGE_AUTO_DELETE_TIMER_CHANGED;
    }

    /**
     * @return bool
     */
    public function isMigrateToChatId()
    {
        return $this->getType() == self::T_MIGRATE_TO_CHAT_ID;
    }

    /**
     * @return bool
     */
    public function isMigrateFromChatId()
    {
        return $this->getType() == self::T_MIGRATE_FROM_CHAT_ID;
    }

    /**
     * @return bool
     */
    public function isPinnedMessage()
    {
        return $this->getType() == self::T_PINNED_MESSAGE;
    }

    /**
     * @return bool
     */
    public function isInvoice()
    {
        return $this->getType() == self::T_INVOICE;
    }

    /**
     * @return bool
     */
    public function isSuccessfulPayment()
    {
        return $this->getType() == self::T_SUCCESSFUL_PAYMENT;
    }

    /**
     * @return bool
     */
    public function isProximityAlertTriggered()
    {
        return $this->getType() == self::T_PROXIMITY_ALERT_TRIGGERED;
    }

    /**
     * @return bool
     */
    public function isVoiceChatScheduled()
    {
        return $this->getType() == self::T_VIDEO_CHAT_SCHEDULED;
    }

    /**
     * @return bool
     */
    public function isVoiceChatStarted()
    {
        return $this->getType() == self::T_VIDEO_CHAT_STARTED;
    }

    /**
     * @return bool
     */
    public function isVoiceChatEnded()
    {
        return $this->getType() == self::T_VIDEO_CHAT_ENDED;
    }

    /**
     * @return bool
     */
    public function isVoiceChatParticipantsInvited()
    {
        return $this->getType() == self::T_VIDEO_CHAT_PARTICIPANTS_INVITED;
    }

    /**
     * @return bool
     */
    public function isWebAppData()
    {
        return $this->getType() == self::T_WEB_APP_DATA;
    }
}
