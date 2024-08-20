<?php
declare(strict_types=1);

namespace app\code\Debuglabs\GdprCookieOverride\Plugin\Framework\View\Page\Config\Renderer;

use Magento\Framework\View\LayoutInterface;
use Magento\Framework\View\Page\Config\Renderer;

class IgnoreRequirejs
{
    /**
     * @var LayoutInterface
     */
    public function __construct(private readonly LayoutInterface $layout) {}

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterRenderAssets(Renderer $subject, string $result): string
    {
        return str_replace('<script', '<script data-cfasync="false"', $result);
    }
}
