<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Bot\Menu;

use Manuylenko\Telegram\Bot\Api\Entities\Keyboards\WebAppInfo;

/**
 * @link https://core.telegram.org/bots/api#menubuttonwebapp
 *
 * @method     string getText()
 * @method WebAppInfo getWebApp()
 *
 * @method      $this setText(string $text)
 * @method      $this setWebApp(WebAppInfo $webApp)
 */
class MenuButtonWebApp extends MenuButton
{
    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'web_app' => WebAppInfo::class
        ];
    }

    /**
     * @param string $text
     * @param WebAppInfo $webApp
     *
     * @return $this
     */
    public static function make(
        $text,
        $webApp
    ) {
        return new static([
            'type' => MenuButton::T_WEB_APP,
            'text' => $text,
            'web_app' => $webApp
        ]);
    }
}
