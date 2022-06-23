<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Bot\Menu;

use Manuylenko\Telegram\Bot\Api\Entities\Bot\BotEntity;

/**
 * @link https://core.telegram.org/bots/api#menubutton
 *
 * @method string getType()
 *
 * @method  $this setType(string $type)
 */
abstract class MenuButton extends BotEntity
{
    /**
     * Types
     */
    const T_COMMANDS = 'commands';
    const T_WEB_APP = 'web_app';
    const T_DEFAULT = 'default';


    /**
     * @param array $data
     *
     * @return MenuButtonDefault|MenuButtonCommands|MenuButtonWebApp|null
     */
    public static function getConcreteEntity(array $data)
    {
        switch ($data['type']) {
            case self::T_DEFAULT:
                return new MenuButtonDefault($data);
            case self::T_COMMANDS:
                return new MenuButtonCommands($data);
            case self::T_WEB_APP:
                return new MenuButtonWebApp($data);
            default:
                return null;
        }
    }
}
