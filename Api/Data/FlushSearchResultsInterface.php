<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Opengento\VarnishFlushManager\Api\Data;

interface FlushSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Flush list.
     * @return \Opengento\VarnishFlushManager\Api\Data\FlushInterface[]
     */
    public function getItems();

    /**
     * Set flush_id list.
     * @param \Opengento\VarnishFlushManager\Api\Data\FlushInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

