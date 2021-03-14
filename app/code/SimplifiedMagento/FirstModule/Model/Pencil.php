<?php

/**
 * Class Pencil
 * @package SimplifiedMagento\FirstModule\Model
 */

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Api\Size;

class Pencil implements PencilInterface
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
     * @var string $name
     */
    protected string $name;

    /**
     * @var string $school
     */
    protected string $school;

    /**
     * Pencil constructor.
     * @param Color $color
     * @param Size $size
     * @param string $name
     * @param string $school
     */
    public function __construct(
        Color $color,
        Size $size,
        string $name = '',
        string $school = ''
    ) {
        $this->color = $color;
        $this->size = $size;
        $this->name = $name;
        $this->school = $school;
    }

    public function getPencilType() : string
    {
        return "Pencil has " . $this->color->getColor() . " Color and " . $this->size->getSize() . " Size";
    }
}
