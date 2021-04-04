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
     * @param $memberId
     * @return void
     */
    public function delete($memberId);
}
