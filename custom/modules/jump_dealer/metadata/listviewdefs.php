<?php
$module_name = 'jump_dealer';
$listViewDefs [$module_name] = 
array (
  'DEALER_CODE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DEALER_CODE',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'EMAIL_ADDRESS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_EMAIL_ADDRESS',
    'width' => '10%',
  ),
  'TIN_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TIN',
    'width' => '10%',
  ),
  'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'OWNING_BRANCH_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OWNING_BRANCH',
    'width' => '10%',
  ),
);
;
?>
