<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Bot\Commands\Scope;

/**
 * @link https://core.telegram.org/bots/api#botcommandscopedefault
 *
 * @method string getType()
 *
 * @method  $this setType(string $type)
 */
class BotCommandScopeDefault extends BotCommandScope
{
    /**
     * @return BotCommandScopeDefault
     */
    public static function make()
    {
        return new static([
            'type' => BotCommandScope::T_DEFAULT
        ]);
    }
}
