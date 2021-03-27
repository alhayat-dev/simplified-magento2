<?php

/**
 * PLEASE ENTER ONE LINE SHORT DESCRIPTION OF CLASS
 *
 * Class HeavyService
 * @package SimplifiedMagento\FirstModule\Model
 */


namespace SimplifiedMagento\FirstModule\Model;

class HeavyService
{
    public function __construct()
    {
        echo "HeavyService has been instantiated." . PHP_EOL;
    }

    public function printHeavyServiceMessage()
    {
        return "Message from heavy service class" . PHP_EOL;
    }
}
