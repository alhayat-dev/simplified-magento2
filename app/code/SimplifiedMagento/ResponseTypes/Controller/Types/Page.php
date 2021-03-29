<?php

/**
 * PLEASE ENTER ONE LINE SHORT DESCRIPTION OF CLASS
 *
 * Class Page
 * @package SimplifiedMagento\ResponseTypes\Controller\Types
 */

namespace SimplifiedMagento\ResponseTypes\Controller\Types;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Page implements ActionInterface
{
    /**
     * @var PageFactory $pageFactory
     */
    private PageFactory $pageFactory;

    /**
     * Page constructor.
     * @param PageFactory $pageFactory
     */
    public function __construct(
        PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }
}
