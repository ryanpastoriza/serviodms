<?php
// created: 2018-07-31 06:39:02
$subpanel_layout['list_fields'] = array (
  'itemno2_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ITEMNO2',
    'id' => 'JUMP_ACCESSORY_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'jump_Accessory',
    'target_record_key' => 'jump_accessory_id_c',
  ),
  'itemdescription2_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ITEMDESCRIPTION2',
    'width' => '10%',
  ),
  'free_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_FREE',
    'width' => '10%',
  ),
  'price2_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PRICE2',
    'width' => '10%',
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'jump_Accessories',
    'width' => '5%',
    'default' => true,
  ),
);