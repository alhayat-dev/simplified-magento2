<?php

/**
 * Class Green
 * @package SimplifiedMagento\FirstModule\Model
 */


namespace SimplifiedMagento\FirstModule\Model\Colors;

use SimplifiedMagento\FirstModule\Api\Color;

class Green implements Color
{

    public function getColor(): string
    {
        return "Green";
    }
}
