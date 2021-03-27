<?php

/*
 * Class Index
 * @package SimplifiedMagento\EventObserver\Controller\Index
 */

namespace SimplifiedMagento\EventObserver\Controller\Index;

use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\DataObject;

class Index implements ActionInterface
{
    /**
     * @var ManagerInterface $eventManager
     */
    private ManagerInterface $eventManager;

    public function __construct(ManagerInterface $eventManager)
    {
        $this->eventManager = $eventManager;
    }

    public function execute()
    {
        $message =  new DataObject(["greeting" => "Good Afternoon"]);
        $this->eventManager->dispatch('custom_event', ['greeting' => $message]);
        echo $message->getGreeting();
        exit();
    }
}
