<?php
$installer = $this;

$installer->startSetup();

/************************
 *  Accounting Contact  *
 ************************/

// begin defining attribute
$installer->addAttribute('customer', 'accounting_name', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => 'Name',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '',
    'visible_on_front' => 1,
));

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'accounting_name')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute


// begin defining attribute
$installer->addAttribute('customer', 'accounting_title', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => 'Title',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '',
    'visible_on_front' => 1,
));

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'accounting_title')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute


// begin defining attribute
$installer->addAttribute('customer', 'accounting_email', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => 'Email',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '',
    'visible_on_front' => 1,
));

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'accounting_email')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute


// begin defining attribute
$installer->addAttribute('customer', 'accounting_phone', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => 'Phone',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '',
    'visible_on_front' => 1,
));

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'accounting_phone')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute


// begin defining attribute
$installer->addAttribute('customer', 'accounting_direct', array(
    'type' => 'varchar',
    'input' => 'text',
    'label' => 'Direct',
    'global' => 1,
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'default' => '',
    'visible_on_front' => 1,
));

Mage::getSingleton('eav/config')
        ->getAttribute('customer', 'accounting_direct')
        ->setData('used_in_forms', array('adminhtml_customer','customer_account_create','customer_account_edit'))
        ->save();
// end defining attribute

$installer->endSetup();