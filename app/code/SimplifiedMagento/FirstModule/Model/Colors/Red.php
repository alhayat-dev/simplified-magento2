<?php

/**
 * Class Red
 * @package SimplifiedMagento\FirstModule\Model
 */

namespace SimplifiedMagento\FirstModule\Model\Colors;

use SimplifiedMagento\FirstModule\Api\Brightness;
use SimplifiedMagento\FirstModule\Api\Color;

class Red implements Color
{
    /**
     * @var Brightness $brightness
     */
    private Brightness $brightness;

    /**
     * Red constructor.
     * @param Brightness $brightness
     */
    public function __construct(
        Brightness $brightness
    ) {
        $this->brightness = $brightness;
    }

    public function getColor(): string
    {
        return "Red";
    }
}
