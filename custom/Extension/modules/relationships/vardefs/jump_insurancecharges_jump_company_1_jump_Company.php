<?php
// created: 2018-07-26 02:23:33
$dictionary["jump_Company"]["fields"]["jump_insurancecharges_jump_company_1"] = array (
  'name' => 'jump_insurancecharges_jump_company_1',
  'type' => 'link',
  'relationship' => 'jump_insurancecharges_jump_company_1',
  'source' => 'non-db',
  'module' => 'jump_InsuranceCharges',
  'bean_name' => 'jump_InsuranceCharges',
  'vname' => 'LBL_JUMP_INSURANCECHARGES_JUMP_COMPANY_1_FROM_JUMP_INSURANCECHARGES_TITLE',
  'id_name' => 'jump_insurancecharges_jump_company_1jump_insurancecharges_ida',
);
$dictionary["jump_Company"]["fields"]["jump_insurancecharges_jump_company_1_name"] = array (
  'name' => 'jump_insurancecharges_jump_company_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JUMP_INSURANCECHARGES_JUMP_COMPANY_1_FROM_JUMP_INSURANCECHARGES_TITLE',
  'save' => true,
  'id_name' => 'jump_insurancecharges_jump_company_1jump_insurancecharges_ida',
  'link' => 'jump_insurancecharges_jump_company_1',
  'table' => 'jump_insurancecharges',
  'module' => 'jump_InsuranceCharges',
  'rname' => 'name',
);
$dictionary["jump_Company"]["fields"]["jump_insurancecharges_jump_company_1jump_insurancecharges_ida"] = array (
  'name' => 'jump_insurancecharges_jump_company_1jump_insurancecharges_ida',
  'type' => 'link',
  'relationship' => 'jump_insurancecharges_jump_company_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_JUMP_INSURANCECHARGES_JUMP_COMPANY_1_FROM_JUMP_INSURANCECHARGES_TITLE',
);
