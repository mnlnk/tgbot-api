<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Keyboards;

use Manuylenko\Telegram\Bot\Api\Entities\Poll\Poll;

/**
 * @link https://core.telegram.org/bots/api#keyboardbuttonpolltype
 *
 * @method string|null getType()
 *
 * @method       $this setType(string $type)
 */
class KeyboardButtonPollType extends KeyboardEntity
{
	/**
	 * @param string|null $type
     *
	 * @return $this
	 */
	public static function make(
        $type = null
    ) {
	    return new static([
	    	'type' => $type
		]);
	}

    /**
     * @return $this
     */
    public static function makeQuiz()
    {
        return self::make(Poll::T_QUIZ);
    }

    /**
     * @return $this
     */
    public static function makeRegular()
    {
        return self::make(Poll::T_REGULAR);
    }
}
