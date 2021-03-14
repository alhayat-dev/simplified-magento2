<?php

/**
 * Class Small
 * @package SimplifiedMagento\FirstModule\Model
 */


namespace SimplifiedMagento\FirstModule\Model\Sizes;

use SimplifiedMagento\FirstModule\Api\Size;

class Small implements Size
{

    public function getSize(): string
    {
        return "Small";
    }
}
