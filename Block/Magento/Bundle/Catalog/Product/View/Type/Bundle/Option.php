<?php

namespace Wm21w\BundleOptionsUrl\Block\Magento\Bundle\Catalog\Product\View\Type\Bundle;


class Option extends \Magento\Bundle\Block\Catalog\Product\View\Type\Bundle\Option
{
    /**
     * @param \Magento\Catalog\Model\Product $selection
     * @param bool $includeContainer
     * @return string
     */
    public function getSelectionQtyTitlePrice($selection, $includeContainer = true)
    {
        $this->setFormatProduct($selection);
        $priceTitle = '<span class="product-name">' . $selection->getSelectionQty() * 1 . ' x ' . $this->escapeHtml($selection->getName()) . ' xxxxxxxxxxxxxxxxxx-xxxxxxx</span>';

        $priceTitle .= ' &nbsp; ' . ($includeContainer ? '<span class="price-notice">' : '') . '+' .
            $this->renderPriceString($selection, $includeContainer) . ($includeContainer ? '</span>' : '');

        return $priceTitle;
    }
	
}
	
	