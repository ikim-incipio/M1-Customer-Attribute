<?php
$installer = $this;

$installer->startSetup();

/**************************
 *  Business Information  *
 **************************/

// begin defining attribute
$installer->addAttribute('customer', 'business_name', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => 'Business Name',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '',
    'visible_on_front' => 1,
));

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'business_name')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute


// begin defining attribute
$installer->addAttribute('customer', 'dba', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => 'DBA',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '',
    'visible_on_front' => 1,
));

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'dba')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute


// begin defining attribute
$installer->addAttribute('customer', 'ein_tin', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => 'EIN/TIN',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '',
    'visible_on_front' => 1,
));

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'ein_tin')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute


// begin defining attribute
$installer->addAttribute('customer', 'resale_number', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => 'Resale Number',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '',
    'visible_on_front' => 1,
));

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'resale_number')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute


// begin defining attribute
$installer->addAttribute('customer', 'business_type', array(
    'type' => 'int',
    'input' => 'text',
    'label' => 'Business type',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
));

$this->updateAttribute('customer', 'business_type', 'frontend_input', 'select');
$this->updateAttribute('customer', 'business_type', 'source_model', 'customerattribute/customer_attribute_businesstype');

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'business_type')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute


// begin defining attribute
$installer->addAttribute('customer', 'address_length_years', array(
    'type' => 'int',
    'input' => 'text',
    'label' => 'Length of time at current address (years)',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
));

$this->updateAttribute('customer', 'address_length_years', 'frontend_input', 'select');
$this->updateAttribute('customer', 'address_length_years', 'source_model', 'customerattribute/customer_attribute_addresslengthyears');

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'address_length_years')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute


// begin defining attribute
$installer->addAttribute('customer', 'address_length_months', array(
    'type' => 'int',
    'input' => 'text',
    'label' => 'Length of time at current address (months)',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
));

$this->updateAttribute('customer', 'address_length_months', 'frontend_input', 'select');
$this->updateAttribute('customer', 'address_length_months', 'source_model', 'customerattribute/customer_attribute_addresslengthmonths');

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'address_length_months')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute

$installer->endSetup();