<?php

/**
 * Class Book
 * @package SimplifiedMagento\FirstModule\Model
 */

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\Size;

class Book
{
    /**
     * @var Color $color
     */
    protected Color $color;

    /**
     * @var Size $size
     */
    protected Size $size;

    /**
     * Book constructor.
     * @param Color $color
     * @param Size $size
     */
    public function __construct(
        Color $color,
        Size $size
    ) {
        $this->color = $color;
        $this->size = $size;
    }
}
