<?php
$installer = $this;

$installer->startSetup();

/*************************
 *  Payment Information  *
 *************************/

// begin defining attribute
$installer->addAttribute('customer', 'payment_terms', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => 'Request Payment Terms',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '',
    'visible_on_front' => 1,
));

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'payment_terms')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute


// begin defining attribute
$installer->addAttribute('customer', 'payment_prepaid', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => 'Prepaid',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '',
    'visible_on_front' => 1,
));

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'payment_prepaid')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute


// begin defining attribute
$installer->addAttribute('customer', 'payment_preferred_method', array(
    'type' => 'int',
    'input' => 'text',
    'label' => 'Preferred payment method',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '0',
    'visible_on_front' => 1,
));

$this->updateAttribute('customer', 'payment_preferred_method', 'frontend_input', 'select');
$this->updateAttribute('customer', 'payment_preferred_method', 'source_model', 'customerattribute/customer_attribute_paymentpreferredmethod');

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'payment_preferred_method')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute

$installer->endSetup();