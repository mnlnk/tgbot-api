<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Bot\Commands\Scope;

use Manuylenko\Telegram\Bot\Api\Entities\Bot\BotEntity;

/**
 * @link https://core.telegram.org/bots/api#botcommandscope
 */
abstract class BotCommandScope extends BotEntity
{
    /**
     * Types
     */
    const T_DEFAULT = 'default';
    const T_ALL_PRIVATE_CHATS = 'all_private_chats';
    const T_ALL_GROUP_CHATS = 'all_group_chats';
    const T_ALL_CHAT_ADMINISTRATORS = 'all_chat_administrators';
    const T_CHAT = 'chat';
    const T_CHAT_ADMINISTRATORS = 'chat_administrators';
    const T_CHAT_MEMBER = 'chat_member';
}
