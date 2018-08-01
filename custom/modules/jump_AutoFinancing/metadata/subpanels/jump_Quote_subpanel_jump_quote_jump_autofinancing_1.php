<?php
// created: 2018-07-31 06:38:52
$subpanel_layout['list_fields'] = array (
  'bank_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_BANK',
    'id' => 'JUMP_BANK_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'jump_Bank',
    'target_record_key' => 'jump_bank_id_c',
  ),
  'scheme_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_SCHEME',
    'id' => 'JUMP_SCHEME_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'jump_Scheme',
    'target_record_key' => 'jump_scheme_id_c',
  ),
  'chatelfee_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CHATELFEE',
    'width' => '10%',
  ),
  'chatelfeefree_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_CHATELFEEFREE',
    'width' => '10%',
  ),
  'downpayment_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DOWNPAYMENT',
    'width' => '10%',
  ),
  'downpaymentp_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DOWNPAYMENTP',
    'width' => '10%',
  ),
  'discount2_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DISCOUNT2',
    'width' => '10%',
  ),
  'amountfinanced_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_AMOUNTFINANCED',
    'width' => '10%',
  ),
  'discount1_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DISCOUNT1',
    'width' => '10%',
  ),
  'netdownpayment_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_NETDOWNPAYMENT',
    'width' => '10%',
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'jump_AutoFinancing',
    'width' => '5%',
    'default' => true,
  ),
);