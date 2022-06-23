<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Bot\Commands\Scope;

/**
 * @link https://core.telegram.org/bots/api#botcommandscopeallgroupchats
 *
 * @method string getType()
 *
 * @method  $this setType(string $type)
 */
class BotCommandScopeAllGroupChats extends BotCommandScope
{
    /**
     * @return BotCommandScopeAllGroupChats
     */
    public static function make()
    {
        return new static([
            'type' => BotCommandScope::T_ALL_GROUP_CHATS
        ]);
    }
}
