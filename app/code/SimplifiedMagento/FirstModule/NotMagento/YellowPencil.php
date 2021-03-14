<?php

/**
 * Class YellowPencil
 * @package SimplifiedMagento\FirstModule\NotMagento
 */


namespace SimplifiedMagento\FirstModule\NotMagento;

class YellowPencil implements PencilInterface
{

    public function getPencilType(): string
    {
        return "Yellow Pencil";
    }
}
