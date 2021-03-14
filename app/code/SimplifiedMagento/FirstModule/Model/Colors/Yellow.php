<?php

/**
 * Class Yellow
 * @package SimplifiedMagento\FirstModule\Model
 */

namespace SimplifiedMagento\FirstModule\Model\Colors;

use SimplifiedMagento\FirstModule\Api\Brightness;
use SimplifiedMagento\FirstModule\Api\Color;

class Yellow implements Color
{
    /**
     * @var Brightness $brightness
     */
    private Brightness $brightness;

    /**
     * Yellow constructor.
     * @param Brightness $brightness
     */
    public function __construct(
        Brightness $brightness
    ) {
        $this->brightness = $brightness;
    }

    public function getColor(): string
    {
        return "Yellow";
    }
}
