<?php

namespace Ecomteck\MobileDetect\Helper;

/**
 * Class Data
 * @package Ecomteck\MobileDetect\Helper
 */

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    
    /**
     * @var \Ecomteck\MobileDetect\Library\MobileDetect
     */
    protected $_mobileDetector;


    /**
     * Constructor
     *
     * @param \Ecomteck\MobileDetect\Library\MobileDetect $mobileDetector
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Ecomteck\MobileDetect\Library\MobileDetect $mobileDetector,
        \Magento\Framework\App\Helper\Context $context
    ) {
        $this->_mobileDetector = $mobileDetector;
        parent::__construct($context);
    }

    /**
     * Returns true if the device is mobile or a tablet
     * @return bool
     */
    public function isMobile() {
        return $this->_mobileDetector->isMobile() || $this->_mobileDetector->isTablet();
    }


}
