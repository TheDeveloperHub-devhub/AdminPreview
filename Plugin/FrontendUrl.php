<?php

declare(strict_types=1);

namespace DeveloperHub\AdminPreview\Plugin;

use Magento\Framework\UrlInterface;

/**
 * Class FrontendUrl
 * @package DeveloperHub\AdminPreview\Plugin
 */
class FrontendUrl
{
    /**
     * @var UrlInterface
     */
    private $urlInterface;

    /**
     * FrontendUrl constructor.
     * @param UrlInterface $urlInterface
     */
    public function __construct(UrlInterface $urlInterface)
    {
        $this->urlInterface = $urlInterface;
    }

    /**
     * @return UrlInterface
     */
    public function getFrontendUrl(): UrlInterface
    {
        return $this->urlInterface;
    }
}
