<?php

namespace Manuylenko\Telegram\Bot\Api\Entities\Stickers;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;

/**
 * @link https://core.telegram.org/bots/api#maskposition
 *
 * @method string getPoint()
 * @method  float getXShift()
 * @method  float getYShift()
 * @method  float getScale()
 */
class MaskPosition extends Entity
{
    /**
     * Points
     */
	const P_FOREHEAD = 'forehead';
	const P_EYES = 'eyes';
	const P_MOUTH = 'mouth';
	const P_CHIN = 'chin';


    /**
     * @return bool
     */
    public function isForehead()
    {
        return $this->getPoint() == self::P_FOREHEAD;
    }

    /**
     * @return bool
     */
    public function isEyes()
    {
        return $this->getPoint() == self::P_EYES;
    }

    /**
     * @return bool
     */
    public function isMouth()
    {
        return $this->getPoint() == self::P_MOUTH;
    }

    /**
     * @return bool
     */
    public function isChin()
    {
        return $this->getPoint() == self::P_CHIN;
    }
}
