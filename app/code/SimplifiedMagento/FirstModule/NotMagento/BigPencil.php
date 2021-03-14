<?php

/**
 * Class BigPencil
 * @package SimplifiedMagento\FirstModule\NotMagento
 */


namespace SimplifiedMagento\FirstModule\NotMagento;

class BigPencil implements PencilInterface
{

    public function getPencilType(): string
    {
        return "Big Pencil";
    }
}
