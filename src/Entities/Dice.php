<?php

namespace Manuylenko\Telegram\Bot\Api\Entities;

/**
 * @link https://core.telegram.org/bots/api#dice
 *
 * @method string getEmoji()
 * @method    int getValue()
 */
class Dice extends Entity
{
    /**
     * Emoji
     */
    const E_DICE = '🎲';
    const E_DARTS = '🎯';
    const E_BASKETBALL = '🏀';
    const E_FOOTBALL = '⚽';
    const E_SLOT_MACHINE = '🎰';
    const E_BOWLING = '🎳';
}
