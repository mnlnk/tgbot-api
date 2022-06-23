<?php

namespace Manuylenko\Telegram\Bot\Api\Entities;

/**
 * @link https://core.telegram.org/bots/api#videochatparticipantsinvited
 *
 * @method User[]|null getUsers()
 */
class VideoChatParticipantsInvited extends Entity
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'users' => [User::class]
        ];
    }
}
