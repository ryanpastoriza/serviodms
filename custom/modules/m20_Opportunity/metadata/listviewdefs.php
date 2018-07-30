<?php
$module_name = 'm20_Opportunity';
$listViewDefs [$module_name] = 
array (
  'INQUIRY_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_INQUIRY_NUMBER',
    'width' => '10%',
  ),
  'OPPORTUNITYID_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OPPORTUNITYID',
    'width' => '10%',
  ),
  'CUSTOMER_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CUSTOMER',
    'id' => 'JUMP_PROSPECT_INQUIRY_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'BASE_MODEL_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_BASE_MODEL',
    'id' => 'J41_BASE_MODEL_ID_C',
    'link' => true,
    'width' => '10%',
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
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
;
?>
