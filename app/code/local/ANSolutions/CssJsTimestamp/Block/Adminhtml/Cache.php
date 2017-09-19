<?php
/**
 * @category   ANSolutions
 * @package    ANSolutions_CssJsTimestamp
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class ANSolutions_CssJsTimestamp_Block_Adminhtml_Cache extends Mage_Adminhtml_Block_Cache
{
    /**
     * Class constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->_addButton('flush_cssjs', array(
            'label'     => Mage::helper('core')->__('Flush Browser Cached CSS/JS'),
            'onclick'   => 'setLocation(\'' . $this->getFlushCachedCssJsUrl() .'\')',
        ), 0, 1);
    }

    public function getFlushCachedCssJsUrl()
    {
        return $this->getUrl('*/*/flushCssJs');
    }
}