<?php
class Incipio_CustomerAttribute_Block_Select extends Mage_Core_Block_Template
{
	public function getCustomerAttributeSelect($attr_code)
	{
		$options = Mage::getModel('customerattribute/customer_attribute_'.str_replace('_', '', $attr_code))->toOptionArray();

		$html = $this->getLayout()->createBlock('core/html_select')
            ->setName($attr_code)
            ->setId($attr_code)
            ->setTitle(str_replace('_', ' ', $attr_code))
            ->setClass('validate-select')
            //->setValue()
            ->setOptions($options)
            ->getHtml();

		return $html;
	}
}