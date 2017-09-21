<?php
class Incipio_CustomerAttribute_Model_Customer_Attribute_Businesstype extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
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
					'label' => Mage::helper('customerattribute')->__('Sole Proprietorship'),
					'value' => 1
				),
				array(
					'label' => Mage::helper('customerattribute')->__('Partnership'),
					'value' => 2
				),
				array(
					'label' => Mage::helper('customerattribute')->__('LLC'),
					'value' => 3
				),
				array(
					'label' => Mage::helper('customerattribute')->__('Corporation'),
					'value' => 4
				),
				array(
					'label' => Mage::helper('customerattribute')->__('Other'),
					'value' => 5
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