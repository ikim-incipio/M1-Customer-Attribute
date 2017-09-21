<?php
class Incipio_CustomerAttribute_Model_Customer_Attribute_Addresslengthyears extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
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
			);
			$i = 1;
			while ($i < 10){
				$this->_options[] = array(
					'label' => Mage::helper('customerattribute')->__($i),
					'value' => $i
				);
				$i++;
			}
			$this->_options[] = array(
				'label' => Mage::helper('customerattribute')->__('>10'),
				'value' => 10
			);
		}
		return $this->_options;
	}

	public function toOptionArray()
	{
		return $this->getAllOptions();
	}
}