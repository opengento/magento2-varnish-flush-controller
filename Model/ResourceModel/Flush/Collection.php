<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Opengento\VarnishFlushManager\Model\ResourceModel\Flush;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'flush_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Opengento\VarnishFlushManager\Model\Flush::class,
            \Opengento\VarnishFlushManager\Model\ResourceModel\Flush::class
        );
    }
}

