<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Keyboards;

use Exception;
use Manuylenko\Telegram\Bot\Api\Entities\Games\CallbackGame;

/**
 * @link https://core.telegram.org/bots/api#inlinekeyboardbutton
 *
 * @method            string getText()
 * @method       string|null getUrl()
 * @method     LoginUrl|null getLoginUrl()
 * @method       string|null getCallbackData()
 * @method   WebAppInfo|null getWebApp()
 * @method       string|null getSwitchInlineQuery()
 * @method       string|null getSwitchInlineQueryCurrentChat()
 * @method CallbackGame|null getCallbackGame()
 * @method         bool|null getPay()
 *
 * @method             $this setText(string $text)
 */
class InlineKeyboardButton extends KeyboardEntity
{
    /**
     * Types
     */
	const T_LOGIN_URL = 'login_url';
	const T_CALLBACK_DATA = 'callback_data';
	const T_WEB_APP = 'web_app';
	const T_SWITCH_INLINE_QUERY = 'switch_inline_query';
	const T_SWITCH_INLINE_QUERY_CURRENT_CHAT = 'switch_inline_query_current_chat';
	const T_CALLBACK_GAME = 'callback_game';
	const T_PAY = 'pay';


    /**
     * @return array
     */
    protected function subEntities()
    {
        return [
            'web_app' => WebAppInfo::class,
            'login_url' => LoginUrl::class,
            'callback_game' => CallbackGame::class
        ];
    }

    /**
     * @param LoginUrl $loginUrl
     *
     * @return $this
     */
    public function setLoginUrl(LoginUrl $loginUrl)
    {
        return $this->setAction(self::T_LOGIN_URL, $loginUrl);
    }

    /**
     * @param string $callbackData
     *
     * @return $this
     */
    public function setCallbackData($callbackData)
    {
        return $this->setAction(self::T_CALLBACK_DATA, $callbackData);
    }

    /**
     * @param WebAppInfo $webApp
     *
     * @return $this
     */
    public function setWebApp(WebAppInfo $webApp)
    {
        return $this->setAction(self::T_WEB_APP, $webApp);
    }

    /**
     * @param string $switchInlineQuery
     *
     * @return $this
     */
    public function setSwitchInlineQuery($switchInlineQuery)
    {
        return $this->setAction(self::T_SWITCH_INLINE_QUERY, $switchInlineQuery);
    }

    /**
     * @param string $switchInlineQueryCurrentChat
     *
     * @return $this
     */
    public function setSwitchInlineQueryCurrentChat($switchInlineQueryCurrentChat)
    {
        return $this->setAction(self::T_SWITCH_INLINE_QUERY_CURRENT_CHAT, $switchInlineQueryCurrentChat);
    }

    /**
     * @param CallbackGame $callbackGame
     *
     * @return $this
     */
    public function setCallbackGame(CallbackGame $callbackGame)
    {
        return $this->setAction(self::T_CALLBACK_GAME, $callbackGame);
    }

    /**
     * @param bool $pay
     *
     * @return $this
     */
    public function setPay($pay)
    {
        return $this->setAction(self::T_PAY, $pay);
    }

    /**
     * @return string|null
     */
    public function getType()
    {
        $types = [
            self::T_LOGIN_URL,
            self::T_CALLBACK_DATA,
            self::T_WEB_APP,
            self::T_SWITCH_INLINE_QUERY,
            self::T_SWITCH_INLINE_QUERY_CURRENT_CHAT,
            self::T_CALLBACK_GAME,
            self::T_PAY
        ];

        foreach ($types as $type) {
            if ($this->has($type)) return $type;
        }

        return null;
    }

    /**
     * @param string $type
     * @param WebAppInfo|LoginUrl|CallbackGame|string|bool $value
     *
     * @return $this
     */
    protected function setAction($type, $value)
    {
        $types = [
            self::T_LOGIN_URL,
            self::T_CALLBACK_DATA,
            self::T_WEB_APP,
            self::T_SWITCH_INLINE_QUERY,
            self::T_SWITCH_INLINE_QUERY_CURRENT_CHAT,
            self::T_CALLBACK_GAME,
            self::T_PAY
        ];

        if (! in_array($type, $types)) {
            throw new Exception('Не корректный тип действия кнопки');
        }

        array_map([$this, 'remove'], $types);

        return $this->set($type, $value);
    }

    /**
     * @param string $text
     * @param string|null $type
     * @param WebAppInfo|LoginUrl|CallbackGame|string|null $value
     *
     * @return $this
     */
    public static function make(
        $text,
        $type = null,
        $value = null
    ) {
        $entity = new static([
            'text' => $text,
        ]);

        if (! is_null($type) && ! is_null($value)) {
            $entity->setAction($type, $value);
        }

        return $entity;
    }

    /**
     * @param string $text
     * @param LoginUrl $loginUrl
     *
     * @return $this
     */
    public static function makeLoginUrl($text, LoginUrl $loginUrl)
    {
        return self::make($text)->setLoginUrl($loginUrl);
    }

    /**
     * @param string $text
     * @param string $callbackData
     *
     * @return $this
     */
    public static function makeCallbackData($text, $callbackData)
    {
        return self::make($text)->setCallbackData($callbackData);
    }

    /**
     * @param string $text
     * @param WebAppInfo $webApp
     *
     * @return $this
     */
    public static function makeWebApp($text, WebAppInfo $webApp)
    {
        return self::make($text)->setWebApp($webApp);
    }

    /**
     * @param string $text
     * @param string $switchInlineQuery
     *
     * @return $this
     */
    public static function makeSwitchInlineQuery($text, $switchInlineQuery)
    {
        return self::make($text)->setSwitchInlineQuery($switchInlineQuery);
    }

    /**
     * @param string $text
     * @param string $switchInlineQueryCurrentChat
     *
     * @return $this
     */
    public static function makeSwitchInlineQueryCurrentChat($text, $switchInlineQueryCurrentChat)
    {
        return self::make($text)->setSwitchInlineQueryCurrentChat($switchInlineQueryCurrentChat);
    }

    /**
     * @param string $text
     * @param CallbackGame $callbackGame
     *
     * @return $this
     */
    public static function makeCallbackGame($text, CallbackGame $callbackGame)
    {
        return self::make($text)->setCallbackGame($callbackGame);
    }

    /**
     * @param string $text
     *
     * @return $this
     */
    public static function makePay($text)
    {
        return self::make($text)->setPay(true);
    }


    /**
     * @return bool
     */
    public function isLoginUrl()
    {
        return $this->getType() == self::T_LOGIN_URL;
    }

    /**
     * @return bool
     */
    public function isCallbackData()
    {
        return $this->getType() == self::T_CALLBACK_DATA;
    }

    /**
     * @return bool
     */
    public function isWebApp()
    {
        return $this->getType() == self::T_WEB_APP;
    }

    /**
     * @return bool
     */
    public function isSwitchInlineQuery()
    {
        return $this->getType() == self::T_SWITCH_INLINE_QUERY;
    }

    /**
     * @return bool
     */
    public function isSwitchInlineQueryCurrentChat()
    {
        return $this->getType() == self::T_SWITCH_INLINE_QUERY_CURRENT_CHAT;
    }

    /**
     * @return bool
     */
    public function isCallbackGame()
    {
        return $this->getType() == self::T_CALLBACK_GAME;
    }

    /**
     * @return bool
     */
    public function isPay()
    {
        return $this->getType() == self::T_PAY;
    }
}
