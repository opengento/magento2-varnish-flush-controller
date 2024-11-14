<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Opengento\VarnishFlushManager\Model;

use Magento\Framework\Model\AbstractModel;
use Opengento\VarnishFlushManager\Api\Data\FlushInterface;

class Flush extends AbstractModel implements FlushInterface
{
    const string STATUS_LOG = 'log';
    const string STATUS_INTERRUPT = 'interrupt';

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Opengento\VarnishFlushManager\Model\ResourceModel\Flush::class);
    }

    /**
     * @inheritDoc
     */
    public function getFlushId()
    {
        return $this->getData(self::FLUSH_ID);
    }

    /**
     * @inheritDoc
     */
    public function setFlushId($flushId)
    {
        return $this->setData(self::FLUSH_ID, $flushId);
    }

    /**
     * @inheritDoc
     */
    public function getTags()
    {
        return $this->getData(self::TAGS);
    }

    /**
     * @inheritDoc
     */
    public function setTags($tags)
    {
        return $this->setData(self::TAGS, $tags);
    }

    /**
     * @inheritDoc
     */
    public function getStack()
    {
        return $this->getData(self::STACK);
    }

    /**
     * @inheritDoc
     */
    public function setStack($stack)
    {
        return $this->setData(self::STACK, $stack);
    }

    /**
     * @inheritDoc
     */
    public function getContext()
    {
        return $this->getData(self::CONTEXT);
    }

    /**
     * @inheritDoc
     */
    public function setContext($context)
    {
        return $this->setData(self::CONTEXT, $context);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @inheritDoc
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @inheritDoc
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }
}

