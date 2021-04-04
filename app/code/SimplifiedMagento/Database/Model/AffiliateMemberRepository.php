<?php

namespace SimplifiedMagento\Database\Model;

use Magento\Framework\Exception\AlreadyExistsException;
use Magento\Framework\Exception\CouldNotDeleteException;
use SimplifiedMagento\Database\Api\AffiliateMemberRepositoryInterface;
use SimplifiedMagento\Database\Api\Data;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberResourceModel;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember\CollectionFactory;

class AffiliateMemberRepository implements AffiliateMemberRepositoryInterface
{
    /**
     * @var CollectionFactory $collectionFactory
     */
    private CollectionFactory $collectionFactory;

    private AffiliateMemberFactory $affiliateMemberFactory;
    /**
     * @var AffiliateMemberResourceModel $affiliateMemberResourceModel
     */
    private AffiliateMemberResourceModel $affiliateMemberResourceModel;

    public function __construct(
        AffiliateMemberFactory $affiliateMemberFactory,
        AffiliateMemberResourceModel $affiliateMemberResourceModel,
        CollectionFactory $collectionFactory
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        $this->affiliateMemberResourceModel = $affiliateMemberResourceModel;
    }

    /**
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface[]
     */
    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }

    /**
     * @param int $id
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function getAffiliateMemberById($id)
    {
        $affiliateMember = $this->affiliateMemberFactory->create();
        $this->affiliateMemberResourceModel->load($affiliateMember, $id);
        return$affiliateMember;
    }

    /**
     * @param \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $member
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     * @throws AlreadyExistsException
     */
    public function saveAffiliateMember(\SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $member)
    {
        if ($member->getId() == null) {
            $this->affiliateMemberResourceModel->save($member);
            return $member;
        } else {
            $newMember = $this->getAffiliateMemberById($member->getId());
            foreach ($member->getData() as $key => $value) {
                $newMember->setData($key, $value);
            }
            $this->affiliateMemberResourceModel->save($newMember);
            return $newMember;
        }
    }

    /**
     * Load Block data by given Block Identity
     *
     * @param $id
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function getById($id)
    {
        $member = $this->affiliateMemberFactory->create();
        $this->affiliateMemberResourceModel->load($member, $id);
        if (!$member->getId()) {
            throw new NoSuchEntityException(__('The member with the "%1" ID doesn\'t exist.', $member));
        }
        return $member;
    }

    /**
     * @param $memberId
     * @return bool
     * @throws \Exception
     */
    public function delete($memberId)
    {
        $member = $this->affiliateMemberFactory->create()->load($memberId);
        $member->delete();
        return "test";
//        $this->affiliateMemberResourceModel->load($member, $memberId);
//        $this->affiliateMemberResourceModel->delete($member);
    }
}
