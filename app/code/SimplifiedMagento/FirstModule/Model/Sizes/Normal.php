<?php

/**
 * Class Normal
 * @package SimplifiedMagento\FirstModule\Model
 */


namespace SimplifiedMagento\FirstModule\Model\Sizes;

use SimplifiedMagento\FirstModule\Api\Size;

class Normal implements Size
{

    public function getSize(): string
    {
        return "Normal";
    }
}
