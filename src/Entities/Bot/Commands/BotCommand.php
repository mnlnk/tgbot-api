<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Bot\Commands;

use Manuylenko\Telegram\Bot\Api\Entities\Bot\BotEntity;

/**
 * @link https://core.telegram.org/bots/api#botcommand
 *
 * @method string getCommand()
 * @method string getDescription()
 *
 * @method  $this setCommand(string $command)
 * @method  $this setDescription(string $description)
 */
class BotCommand extends BotEntity
{
	/**
	 * @param string $command
	 * @param string $description
	 *
	 * @return BotCommand
	 */
	public static function make($command, $description)
    {
		return new static([
			'command' => $command,
			'description' => $description
		]);
	}
}
