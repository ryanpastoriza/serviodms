<?php
// created: 2018-08-01 00:21:44
$subpanel_layout['list_fields'] = array (
  'promoname2_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PROMONAME2',
    'id' => 'JUMP_PROMO_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'jump_Promo',
    'target_record_key' => 'jump_promo_id_c',
  ),
  'discountname_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DISCOUNTNAME',
    'width' => '10%',
  ),
  'discountamount_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DISCOUNTAMOUNT',
    'width' => '10%',
  ),
  'applyamounttoup_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_APPLYAMOUNTTOUP',
    'width' => '10%',
  ),
  'applyptoup_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_APPLYPTOUP',
    'width' => '10%',
  ),
  'description2_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DESCRIPTION2',
    'width' => '10%',
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'jump_Discount',
    'width' => '5%',
    'default' => true,
  ),
);