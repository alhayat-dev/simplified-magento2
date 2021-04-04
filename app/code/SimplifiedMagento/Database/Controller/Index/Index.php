<?php

declare(strict_types=1);

namespace SimplifiedMagento\Database\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Exception\AlreadyExistsException;
use SimplifiedMagento\Database\Api\AffiliateMemberRepositoryInterface;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberResourceModel;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember\CollectionFactory;

class Index implements ActionInterface
{
    /**
     * @var AffiliateMemberFactory $affiliateMemberFactory
     */
    private AffiliateMemberFactory $affiliateMemberFactory;
    /**
     * @var AffiliateMemberResourceModel $affiliateMemberResourceModel
     */
    private AffiliateMemberResourceModel $affiliateMemberResourceModel;
    /**
     * @var CollectionFactory
     */
    private CollectionFactory $collectionFactory;
    /**
     * @var AffiliateMemberRepositoryInterface
     */
    private AffiliateMemberRepositoryInterface $affiliateMemberRepository;

    public function __construct(
        AffiliateMemberFactory $affiliateMemberFactory,
        AffiliateMemberResourceModel $affiliateMemberResourceModel,
        CollectionFactory $collectionFactory,
        AffiliateMemberRepositoryInterface $affiliateMemberRepository
    ) {
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        $this->affiliateMemberResourceModel = $affiliateMemberResourceModel;
        $this->collectionFactory = $collectionFactory;
        $this->affiliateMemberRepository = $affiliateMemberRepository;
    }

    public function execute()
    {
        $memberId = 3;
        if ($memberId) {
            $member = $this->affiliateMemberFactory->create();
            $this->affiliateMemberResourceModel->load($member, $memberId);
            $this->affiliateMemberRepository->delete($member);
        }
//        $members = $this->getMembers();

//        $collection = $this->collectionFactory->create();
//        $data = $collection->addFieldToSelect('*');
//        foreach ($data as $datum) {
//            print_r($datum->getData());
//        }
        /*
        $member->setAddress("new adddress 1");
        try {
            $this->affiliateMemberResourceModel->save($member);
        } catch (AlreadyExistsException $e) {
        }
        */
//
//        $member->setName('Alhayat');
//        $member->setAddress('No 13, Dubai');
//        $member->setStatus(false);
//        $member->setPhoneNumber('090078601');
//
//        $this->affiliateMemberResourceModel->save($member);

//        $this->affiliateMemberResourceModel->delete($member);
//        print_r(json_decode(json_encode($member->getData()), true));

//        $members = $this->affiliateMemberFactory->create()->getCollection();
        exit();
    }

    public function getMembers()
    {
        return $this->collectionFactory->create();
    }
}
