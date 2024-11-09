<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Opengento\VarnishFlushManager\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface FlushRepositoryInterface
{

    /**
     * Save Flush
     * @param \Opengento\VarnishFlushManager\Api\Data\FlushInterface $flush
     * @return \Opengento\VarnishFlushManager\Api\Data\FlushInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Opengento\VarnishFlushManager\Api\Data\FlushInterface $flush
    );

    /**
     * Retrieve Flush
     * @param string $flushId
     * @return \Opengento\VarnishFlushManager\Api\Data\FlushInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($flushId);

    /**
     * Retrieve Flush matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Opengento\VarnishFlushManager\Api\Data\FlushSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Flush
     * @param \Opengento\VarnishFlushManager\Api\Data\FlushInterface $flush
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Opengento\VarnishFlushManager\Api\Data\FlushInterface $flush
    );

    /**
     * Delete Flush by ID
     * @param string $flushId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($flushId);
}

