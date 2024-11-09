<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Opengento\VarnishFlushManager\Model;

use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Opengento\VarnishFlushManager\Api\Data\FlushInterface;
use Opengento\VarnishFlushManager\Api\Data\FlushInterfaceFactory;
use Opengento\VarnishFlushManager\Api\Data\FlushSearchResultsInterfaceFactory;
use Opengento\VarnishFlushManager\Api\FlushRepositoryInterface;
use Opengento\VarnishFlushManager\Model\ResourceModel\Flush as ResourceFlush;
use Opengento\VarnishFlushManager\Model\ResourceModel\Flush\CollectionFactory as FlushCollectionFactory;

class FlushRepository implements FlushRepositoryInterface
{

    /**
     * @var ResourceFlush
     */
    protected $resource;

    /**
     * @var FlushInterfaceFactory
     */
    protected $flushFactory;

    /**
     * @var FlushCollectionFactory
     */
    protected $flushCollectionFactory;

    /**
     * @var CollectionProcessorInterface
     */
    protected $collectionProcessor;

    /**
     * @var Flush
     */
    protected $searchResultsFactory;


    /**
     * @param ResourceFlush $resource
     * @param FlushInterfaceFactory $flushFactory
     * @param FlushCollectionFactory $flushCollectionFactory
     * @param FlushSearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourceFlush $resource,
        FlushInterfaceFactory $flushFactory,
        FlushCollectionFactory $flushCollectionFactory,
        FlushSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->flushFactory = $flushFactory;
        $this->flushCollectionFactory = $flushCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(FlushInterface $flush)
    {
        try {
            $this->resource->save($flush);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the flush: %1',
                $exception->getMessage()
            ));
        }
        return $flush;
    }

    /**
     * @inheritDoc
     */
    public function get($flushId)
    {
        $flush = $this->flushFactory->create();
        $this->resource->load($flush, $flushId);
        if (!$flush->getId()) {
            throw new NoSuchEntityException(__('Flush with id "%1" does not exist.', $flushId));
        }
        return $flush;
    }

    /**
     * @inheritDoc
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->flushCollectionFactory->create();
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model;
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(FlushInterface $flush)
    {
        try {
            $flushModel = $this->flushFactory->create();
            $this->resource->load($flushModel, $flush->getFlushId());
            $this->resource->delete($flushModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the Flush: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($flushId)
    {
        return $this->delete($this->get($flushId));
    }
}

