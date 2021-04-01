<?php

declare(strict_types=1);

namespace SimplifiedMagento\Database\Api;

interface AffiliateMemberRepositoryInterface
{
    /**
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface[]
     */
    public function getList();

    /**
     * @param int $id
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function getAffiliateMemberById($id);

    /**
     * @param Data\AffiliateMemberInterface $member
     * @return void
     */
    public function saveAffiliateMember(\SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface $member);

    /**
     * Delete member by ID.
     *
     * @param $id
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);

}
