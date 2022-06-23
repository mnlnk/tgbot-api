<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Passport\Elements\Errors;

use Manuylenko\Telegram\Bot\Api\Entities\Passport\Elements\PassportElement;

/**
 * @link https://core.telegram.org/bots/api#passportelementerror
 */
abstract class PassportElementError extends PassportElement
{
    /**
     * Source
     */
	const S_DATA = 'data';
	const S_FRONT_SIDE = 'front_side';
	const S_REVERSE_SIDE = 'reverse_side';
	const S_SELFIE = 'selfie';
	const S_FILE = 'file';
	const S_FILES = 'files';
	const S_TRANSLATION_FILE = 'translation_file';
	const S_TRANSLATION_FILES = 'translation_files';
	const S_UNSPECIFIED = 'unspecified';
}
