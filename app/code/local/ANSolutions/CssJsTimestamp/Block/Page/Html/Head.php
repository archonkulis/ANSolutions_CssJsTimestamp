<?php
/**
 * @category    ANSolutions
 * @package     ANSolutions_CssJsTimestamp
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class ANSolutions_CssJsTimestamp_Block_Page_Html_Head extends Mage_Page_Block_Html_Head
{
    /**
     *
     * REWRITTEN TO INCLUDE FILE VERSIONING
     *
     * Merge static and skin files of the same format into 1 set of HEAD directives or even into 1 directive
     *
     * Will attempt to merge into 1 directive, if merging callback is provided. In this case it will generate
     * filenames, rather than render urls.
     * The merger callback is responsible for checking whether files exist, merging them and giving result URL
     *
     * @param string $format - HTML element format for sprintf('<element src="%s"%s />', $src, $params)
     * @param array $staticItems - array of relative names of static items to be grabbed from js/ folder
     * @param array $skinItems - array of relative names of skin items to be found in skins according to design config
     * @param callback $mergeCallback
     * @return string
     */
    protected function &_prepareStaticAndSkinElements($format, array $staticItems, array $skinItems,
                                                      $mergeCallback = null)
    {
        $timestamp = Mage::helper('ansolutions_cssjstimestamp')->getCssJsTimestamp();

        $format = sprintf($format, "%s?t{$timestamp}", "%s");

        return parent::_prepareStaticAndSkinElements($format, $staticItems, $skinItems, $mergeCallback);
    }
}