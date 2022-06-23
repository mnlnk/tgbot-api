<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Bot\Commands\Scope;

/**
 * @link https://core.telegram.org/bots/api#botcommandscopechatadministrators
 *
 * @method     string getType()
 * @method int|string getChatId()
 *
 * @method      $this setType(string $type)
 * @method      $this setChatId(int|string $chatId)
 */
class BotCommandScopeChatAdministrators extends BotCommandScope
{
    /**
     * @param int|string $chatId
     *
     * @return BotCommandScopeChatAdministrators
     */
    public static function make(
        $chatId
    ) {
        return new static([
            'type' => BotCommandScope::T_CHAT_ADMINISTRATORS,
            'chat_id' => $chatId
        ]);
    }
}
