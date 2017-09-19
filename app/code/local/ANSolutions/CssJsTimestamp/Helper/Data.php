<?php
/**
 * @category    ANSolutions
 * @package     ANSolutions_CssJsTimestamp
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class ANSolutions_CssJsTimestamp_Helper_Data extends Mage_Core_Helper_Abstract
{
    const CONFIG_CSS_JS_VERSIONING_PATH = 'ansolutions/cssjsversioning/timestamp';

    public function getCssJsTimestamp()
    {
        return Mage::getStoreConfig(self::CONFIG_CSS_JS_VERSIONING_PATH);
    }
}