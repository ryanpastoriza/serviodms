<?php
$module_name = 'jump_Quote';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CUSTOMER2_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CUSTOMER2',
    'width' => '10%',
  ),
  'MODELDESCRIPTION_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_MODELDESCRIPTION',
    'id' => 'AOS_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'PREFERREDCOLOR1_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PREFERREDCOLOR1',
    'id' => 'JUMP_COLOR_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'PAYMENTMODE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PAYMENTMODE',
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'VEHICLEDETAILS_C' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_VEHICLEDETAILS',
    'sortable' => false,
    'width' => '10%',
  ),
  'VALIDUNTIL_C' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_VALIDUNTIL',
    'width' => '10%',
  ),
  'REVISIONNO_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_REVISIONNO',
    'width' => '10%',
  ),
  'UNITPRICE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_UNITPRICE',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
