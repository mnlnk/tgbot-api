<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Bot\Menu;

/**
 * @link https://core.telegram.org/bots/api#menubuttoncommands
 */
class MenuButtonCommands extends MenuButton
{
    /**
     * @return $this
     */
    public static function make() {
        return new static([
            'type' => MenuButton::T_COMMANDS
        ]);
    }
}
