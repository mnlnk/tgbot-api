<?php

namespace Manuylenko\Telegram\Bot\Api\Entities;

/**
 * @link https://core.telegram.org/bots/api#chatjoinrequest
 *
 * @method                Chat getChat()
 * @method                User getFrom()
 * @method                 int getDate()
 * @method         string|null getBio()
 * @method ChatInviteLink|null getInviteLink()
 */
class ChatJoinRequest extends Entity
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'chat' => Chat::class,
            'from' => User::class,
            'invite_link' => ChatInviteLink::class
        ];
    }
}
