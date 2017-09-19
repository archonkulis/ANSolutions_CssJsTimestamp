<?php
/**
 * @category    ANSolutions
 * @package     ANSolutions_CssJsTimestamp
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
require_once(Mage::getModuleDir('controllers','Mage_Adminhtml').DS.'CacheController.php');

/**
 * Class ANSolutions_CssJsTimestamp_Adminhtml_CacheController
 */
class ANSolutions_CssJsTimestamp_Adminhtml_CacheController extends Mage_Adminhtml_CacheController
{
    /**
     * Update timestamp to current date
     *
     */
    public function flushCssJsAction()
    {
        try {
            Mage::app()->getConfig()->saveConfig(
                ANSolutions_CssJsTimestamp_Helper_Data::CONFIG_CSS_JS_VERSIONING_PATH,
                time()
            );

            $this->_getSession()->addSuccess(Mage::helper('adminhtml')->__("CSS/JS Browser Cache timestamp updated successfully."));
        } catch (Exception $e) {
            $this->_getSession()->addError("Something went wrong: " . $e->getMessage());
        }

        $this->_redirect('*/*');
    }
}
