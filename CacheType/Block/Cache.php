<?php

namespace HN\CacheType\Block;

use Magento\Framework\View\Element\Template;

class Cache extends Template
{
    /**
     * @var \HN\CacheType\Helper\Cache
     */
    protected $cacheHelper;

    /**
     * @param Template\Context $context
     * @param \HN\CacheType\Helper\Cache $cacheHelper
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        \HN\CacheType\Helper\Cache $cacheHelper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->cacheHelper = $cacheHelper;
    }

    public function getLoadCache()
    {
        return $this->cacheHelper->load(\HN\CacheType\Helper\Cache::CACHE_ID);
    }
}
