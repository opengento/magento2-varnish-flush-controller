<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Opengento\VarnishFlushManager\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Flush extends AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('opengento_varnishflushmanager_flush', 'flush_id');
    }
}

