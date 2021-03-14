<?php

/**
 * Class Big
 * @package SimplifiedMagento\FirstModule\Model
 */


namespace SimplifiedMagento\FirstModule\Model\Sizes;

use SimplifiedMagento\FirstModule\Api\Size;

class Big implements Size
{

    public function getSize(): string
    {
        return "Big";
    }
}
