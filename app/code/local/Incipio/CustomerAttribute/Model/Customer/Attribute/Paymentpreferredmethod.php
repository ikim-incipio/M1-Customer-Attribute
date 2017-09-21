<?php
class Incipio_CustomerAttribute_Model_Customer_Attribute_Paymentpreferredmethod extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
	public function getAllOptions()
	{
		if (is_null($this->_options))
		{
			$this->_options = array(
				array(
					'label' => Mage::helper('customerattribute')->__(' '),
					'value' => 0
				),
				array(
					'label' => Mage::helper('customerattribute')->__('Credit Card'),
					'value' => 1
				),
				array(
					'label' => Mage::helper('customerattribute')->__('Wire Transfer'),
					'value' => 2
				),
				array(
					'label' => Mage::helper('customerattribute')->__('Check'),
					'value' => 3
				),
				array(
					'label' => Mage::helper('customerattribute')->__('Paypal'),
					'value' => 4
				),
			);
		}
		return $this->_options;
	}

	public function toOptionArray()
	{
		return $this->getAllOptions();
	}
}