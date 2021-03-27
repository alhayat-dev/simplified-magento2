<?php

/**
 * Class HelloWorld
 * @package SimplifiedMagento\FirstModule\Controller\Page
 */

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\Request\Http;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Model\HeavyService;
use SimplifiedMagento\FirstModule\Model\PencilFactory;

class HelloWorld implements ActionInterface
{
    protected PencilInterface $pencilInterface;
    /**
     * @var ProductRepositoryInterface
     */
    protected ProductRepositoryInterface $productRepository;
    /**
     * @var PencilFactory $pencilFactory
     */
    protected PencilFactory $pencilFactory;
    /**
     * @var Http
     */
    private Http $http;
    /**
     * @var HeavyService
     */
    private HeavyService $heavyService;

    public function __construct(
        PencilFactory $pencilFactory,
        PencilInterface $pencilInterface,
        ProductRepositoryInterface $productRepository,
        Http $http,
        HeavyService $heavyService
    ) {
        $this->pencilInterface = $pencilInterface;
        $this->productRepository = $productRepository;
        $this->pencilFactory = $pencilFactory;
        $this->http = $http;
        $this->heavyService = $heavyService;
    }

    public function execute()
    {
        $id = $this->http->getParam('id', 0);
        if ($id == 1) {
            echo $this->heavyService->printHeavyServiceMessage();
        } else {
            echo "Heavy service not used." . PHP_EOL;
        }
        exit();
        /*
        $pencil = $this->pencilFactory->create(['name' => 'Mudasser Hayat', 'school' => 'Intermediate']);
        var_dump($pencil);
        */

        /*
        echo $this->pencilInterface->getPencilType() . PHP_EOL;
        echo get_class($this->pencilInterface);
        */

        /*
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $pencil = $objectManager->create('SimplifiedMagento\FirstModule\Model\Pencil');
        var_dump($pencil);
        */

        /*
        $book = $objectManager->create('SimplifiedMagento\FirstModule\Model\Book');
        var_dump($book);
        */

        /*
        $student = $objectManager->create('SimplifiedMagento\FirstModule\Model\Student');
        var_dump($student);
        */

//        echo "Main Function" . PHP_EOL;
    }
}
