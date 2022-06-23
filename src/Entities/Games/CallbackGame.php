<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Games;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;

/**
 * @link https://core.telegram.org/bots/api#callbackgame
 */
class CallbackGame extends Entity
{
	/**
	 * @return $this
	 */
	public static function make()
    {
	    return new static([
	    	//
		]);
	}
}
