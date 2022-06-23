<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Bot\Commands\Scope;

/**
 * @link https://core.telegram.org/bots/api#botcommandscopeallchatadministrators
 *
 * @method string getType()
 *
 * @method  $this setType(string $type)
 */
class BotCommandScopeAllChatAdministrators extends BotCommandScope
{
    /**
     * @return BotCommandScopeAllChatAdministrators
     */
    public static function make()
    {
        return new static([
            'type' => BotCommandScope::T_ALL_CHAT_ADMINISTRATORS
        ]);
    }
}
