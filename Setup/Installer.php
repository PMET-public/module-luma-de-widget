<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MagentoEse\LumaDeWidget\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface
{
    /**
     * @var \Magento\WidgetSampleData\Model\CmsBlock
     */
    protected $cmsBlock;

    /**
     * @param \Magento\WidgetSampleData\Model\CmsBlock $cmsBlock
     */
    public function __construct(\MagentoEse\LumaDeWidget\Model\CmsBlock $cmsBlock) {
        $this->cmsBlock = $cmsBlock;
    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {
        $this->cmsBlock->install(
            [
                'MagentoEse_LumaDeWidget::fixtures/cmsblock.csv',
                'MagentoEse_LumaDeWidget::fixtures/cmsblock_giftcard.csv'
            ]
        );
    }
}
