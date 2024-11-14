<?php

namespace Opengento\VarnishFlushManager\Plugin;

use Magento\CacheInvalidate\Model\PurgeCache;
use Magento\Framework\Exception\LocalizedException;
use Opengento\VarnishFlushManager\Api\Data\FlushInterfaceFactory;
use Opengento\VarnishFlushManager\Model\Flush;
use Opengento\VarnishFlushManager\Model\FlushRepository;

class SendPurgeRequest
{
    protected FlushRepository $flushRepository;
    protected FlushInterfaceFactory $flushFactory;

    public function __construct(
        FlushRepository $flushRepository,
        FlushInterfaceFactory $flushFactory
    ) {
        $this->flushRepository = $flushRepository;
        $this->flushFactory    = $flushFactory;
    }

    /**
     * @param PurgeCache   $subject
     * @param callable     $proceed
     * @param array|string $tags
     *
     * @return bool
     */
    public function aroundSendPurgeRequest(PurgeCache $subject, callable $proceed, $tags): bool
    {
        //Save Flush Log
        $flush = $this->flushFactory->create();
        $flush->setTags(
            implode(
                ',',
                $tags));
        $flush->setContext('context');
        $flush->setStack('callstack');
        $flush->setStatus(Flush::STATUS_LOG);

        try {
            $this->flushRepository->save($flush);
        } catch (LocalizedException $e) {

        }

        //todo: intercept flush (cancel if needed)
        return $proceed($tags);
    }
}
