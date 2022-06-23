<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Members;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;
use Manuylenko\Telegram\Bot\Api\Entities\User;

/**
 * @link https://core.telegram.org/bots/api#chatmember
 *
 * @method string getStatus()
 * @method   User getUser()
 */
abstract class ChatMember extends Entity
{
    /**
     * Status
     */
	const S_CREATOR = 'creator';
	const S_ADMINISTRATOR = 'administrator';
	const S_MEMBER = 'member';
	const S_RESTRICTED = 'restricted';
	const S_LEFT = 'left';
	const S_KICKED = 'kicked';


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
     * @param array $data
     *
     * @return ChatMemberOwner|ChatMemberAdministrator|ChatMemberMember|ChatMemberRestricted|ChatMemberLeft|ChatMemberBanned|null
     */
    public static function getConcreteEntity(array $data)
    {
        switch ($data['status']) {
            case self::S_CREATOR:
                return new ChatMemberOwner($data);
            case self::S_ADMINISTRATOR:
                return new ChatMemberAdministrator($data);
            case self::S_MEMBER:
                return new ChatMemberMember($data);
            case self::S_RESTRICTED:
                return new ChatMemberRestricted($data);
            case self::S_LEFT:
                return new ChatMemberLeft($data);
            case self::S_KICKED:
                return new ChatMemberBanned($data);
            default:
                return null;
        }
    }

    /**
     * @deprecated
     *
     * @return bool
     */
    public function isCreator()
    {
        return $this->getStatus() == self::S_CREATOR;
    }

    /**
     * @return bool
     */
    public function isOwner()
    {
        return $this->getStatus() == self::S_CREATOR;
    }

    /**
     * @return bool
     */
    public function isAdministrator()
    {
        return $this->getStatus() == self::S_ADMINISTRATOR;
    }

    /**
     * @return bool
     */
    public function isMember()
    {
        return $this->getStatus() == self::S_MEMBER;
    }

    /**
     * @return bool
     */
    public function isRestricted()
    {
        return $this->getStatus() == self::S_RESTRICTED;
    }

    /**
     * @return bool
     */
    public function isLeft()
    {
        return $this->getStatus() == self::S_LEFT;
    }

    /**
     * @deprecated
     *
     * @return bool
     */
    public function isKicked()
    {
        return $this->getStatus() == self::S_KICKED;
    }

    /**
     * @return bool
     */
    public function isBanned()
    {
        return $this->getStatus() == self::S_KICKED;
    }
}
