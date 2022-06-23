<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Keyboards;

/**
 * @link https://core.telegram.org/bots/api#webappinfo
 *
 * @method string getUrl()
 *
 * @method  $this setUrl(string $url)
 */
class WebAppInfo extends KeyboardEntity
{
    /**
     * @param string $url
     *
     * @return $this
     */
    public static function make(
        $url
    ) {
        return new static([
            'url' => $url
        ]);
    }
}
