<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Payments;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;

/**
 * @link https://core.telegram.org/bots/api#labeledprice
 *
 * @method string getLabel()
 * @method    int getAmount()
 *
 * @method  $this setLabel(string $label)
 * @method  $this setAmount(int $amount)
 */
class LabeledPrice extends Entity
{
    /**
     * @param string $label
     * @param int $amount
     *
     * @return $this
     */
	public static function make($label, $amount)
	{
	    return new static([
            'label' => $label,
            'amount' => $amount
        ]);
	}
}
