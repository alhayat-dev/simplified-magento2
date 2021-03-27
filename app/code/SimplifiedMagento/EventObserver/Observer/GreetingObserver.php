<?php

/**
 * PLEASE ENTER ONE LINE SHORT DESCRIPTION OF CLASS
 *
 * Class GreetingObserver
 * @package SimplifiedMagento\EventObserver\Observer
 */


namespace SimplifiedMagento\EventObserver\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class GreetingObserver implements ObserverInterface
{

    public function execute(Observer $observer)
    {
        $data = $observer->getData('greeting');
        $data->setGreeting("Good Evening...");
    }
}
