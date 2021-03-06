<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MagentoEse\LumaDEWidget\Setup;

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
    public function __construct(\MagentoEse\LumaDEWidget\Model\CmsBlock $cmsBlock) {
        $this->cmsBlock = $cmsBlock;
    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {
        $this->cmsBlock->install(
            [
                'MagentoEse_LumaDEWidget::fixtures/cmsblock.csv',
                'MagentoEse_LumaDEWidget::fixtures/cmsblock_giftcard.csv'
            ]
        );
    }
}
