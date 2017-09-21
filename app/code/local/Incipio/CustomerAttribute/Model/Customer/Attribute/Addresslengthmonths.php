<?php
class Incipio_CustomerAttribute_Model_Customer_Attribute_Addresslengthmonths extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
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
			while ($i <= 12){
				$this->_options[] = array(
					'label' => Mage::helper('customerattribute')->__($i),
					'value' => $i
				);
				$i++;
			}
		}
		return $this->_options;
	}

	public function toOptionArray()
	{
		return $this->getAllOptions();
	}
}