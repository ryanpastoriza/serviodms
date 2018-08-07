<?php
// created: 2018-07-31 06:56:20
$subpanel_layout['list_fields'] = array (
  'free_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_FREE',
    'width' => '10%',
  ),
  'chargecode_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CHARGECODE',
    'id' => 'JUMP_CHARGELIST_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'jump_ChargeList',
    'target_record_key' => 'jump_chargelist_id_c',
  ),
  'chargetype2_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CHARGETYPE2',
    'width' => '10%',
  ),
  'amount2_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_AMOUNT2',
    'width' => '10%',
  ),
  'actualcost2_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ACTUALCOST2',
    'width' => '10%',
  ),
  'description2_c' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_DESCRIPTION2',
    'sortable' => false,
    'width' => '10%',
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'jump_Charges',
    'width' => '5%',
    'default' => true,
  ),
);