<?php

/**
 * Class RedPencil
 * @package SimplifiedMagento\FirstModule\NotMagento
 */


namespace SimplifiedMagento\FirstModule\NotMagento;

class RedPencil implements PencilInterface
{

    public function getPencilType(): string
    {
        return "Red Pencil";
    }
}
