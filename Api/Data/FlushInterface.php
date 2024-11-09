<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Opengento\VarnishFlushManager\Api\Data;

interface FlushInterface
{

    const STATUS = 'status';
    const FLUSH_ID = 'flush_id';
    const TAGS = 'tags';
    const CREATED_AT = 'created_at';
    const STACK = 'stack';
    const CONTEXT = 'context';

    /**
     * Get flush_id
     * @return string|null
     */
    public function getFlushId();

    /**
     * Set flush_id
     * @param string $flushId
     * @return \Opengento\VarnishFlushManager\Flush\Api\Data\FlushInterface
     */
    public function setFlushId($flushId);

    /**
     * Get tags
     * @return string|null
     */
    public function getTags();

    /**
     * Set tags
     * @param string $tags
     * @return \Opengento\VarnishFlushManager\Flush\Api\Data\FlushInterface
     */
    public function setTags($tags);

    /**
     * Get stack
     * @return string|null
     */
    public function getStack();

    /**
     * Set stack
     * @param string $stack
     * @return \Opengento\VarnishFlushManager\Flush\Api\Data\FlushInterface
     */
    public function setStack($stack);

    /**
     * Get context
     * @return string|null
     */
    public function getContext();

    /**
     * Set context
     * @param string $context
     * @return \Opengento\VarnishFlushManager\Flush\Api\Data\FlushInterface
     */
    public function setContext($context);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Opengento\VarnishFlushManager\Flush\Api\Data\FlushInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \Opengento\VarnishFlushManager\Flush\Api\Data\FlushInterface
     */
    public function setStatus($status);
}

