<?php

namespace Manuylenko\Telegram\Bot\Api\Entities;

/**
 * @link https://core.telegram.org/bots/api#chat
 *
 * @method                  int getId()
 * @method               string getType()
 * @method          string|null getTitle()
 * @method          string|null getUsername()
 * @method          string|null getFirstName()
 * @method          string|null getLastName()
 * @method       ChatPhoto|null getPhoto()
 * @method          string|null getBio()
 * @method            bool|null getHasPrivateForwards()
 * @method            bool|null getJoinToSendMessages()
 * @method            bool|null getJoinByRequest()
 * @method          string|null getDescription()
 * @method          string|null getInviteLink()
 * @method         Message|null getPinnedMessage()
 * @method ChatPermissions|null getPermissions()
 * @method             int|null getSlowModeDelay()
 * @method             int|null getMessageAutoDeleteTime()
 * @method            bool|null getHasProtectedContent()
 * @method          string|null getStickerSetName()
 * @method            bool|null getCanSetStickerSet()
 * @method             int|null getLinkedChatId()
 * @method    ChatLocation|null getLocation()
 * @method            bool|null getAllMembersAreAdministrators()
 */
class Chat extends Entity
{
    /**
     * Types
     */
	const T_PRIVATE = 'private';
	const T_GROUP = 'group';
	const T_SUPERGROUP = 'supergroup';
	const T_CHANNEL = 'channel';

    /**
     * Actions
     */
	const A_TYPING = 'typing';
	const A_UPLOAD_PHOTO = 'upload_photo';
	const A_RECORD_VIDEO = 'record_video';
	const A_UPLOAD_VIDEO = 'upload_video';
    /** @deprecated */
	const A_RECORD_AUDIO = 'record_audio';
    /** @deprecated */
	const A_UPLOAD_AUDIO = 'upload_audio';
    const A_RECORD_VOICE = 'record_voice';
    const A_UPLOAD_VOICE = 'upload_voice';
    const A_UPLOAD_DOCUMENT = 'upload_document';
    const A_CHOOSE_STICKER = 'choose_sticker';
	const A_FIND_LOCATION = 'find_location';
	const A_RECORD_VIDEO_NOTE = 'record_video_note';
	const A_UPLOAD_VIDEO_NOTE = 'upload_video_note';


    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'photo' => ChatPhoto::class,
            'pinned_message' => Message::class,
            'permissions' => ChatPermissions::class,
            'location' => ChatLocation::class
        ];
    }

    /**
     * @return bool
     */
    public function isPrivate()
    {
        return $this->getType() == self::T_PRIVATE;
    }

    /**
     * @return bool
     */
    public function isGroup()
    {
        return $this->getType() == self::T_GROUP;
    }

    /**
     * @return bool
     */
    public function isSupergroup()
    {
        return $this->getType() == self::T_SUPERGROUP;
    }

    /**
     * @return bool
     */
    public function isChannel()
    {
        return $this->getType() == self::T_CHANNEL;
    }
}
