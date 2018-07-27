<?php
// created: 2018-07-26 02:23:33
$dictionary["jump_InsuranceCharges"]["fields"]["jump_insurancecharges_jump_company_1"] = array (
  'name' => 'jump_insurancecharges_jump_company_1',
  'type' => 'link',
  'relationship' => 'jump_insurancecharges_jump_company_1',
  'source' => 'non-db',
  'module' => 'jump_Company',
  'bean_name' => 'jump_Company',
  'vname' => 'LBL_JUMP_INSURANCECHARGES_JUMP_COMPANY_1_FROM_JUMP_COMPANY_TITLE',
  'id_name' => 'jump_insurancecharges_jump_company_1jump_company_idb',
);
$dictionary["jump_InsuranceCharges"]["fields"]["jump_insurancecharges_jump_company_1_name"] = array (
  'name' => 'jump_insurancecharges_jump_company_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JUMP_INSURANCECHARGES_JUMP_COMPANY_1_FROM_JUMP_COMPANY_TITLE',
  'save' => true,
  'id_name' => 'jump_insurancecharges_jump_company_1jump_company_idb',
  'link' => 'jump_insurancecharges_jump_company_1',
  'table' => 'jump_company',
  'module' => 'jump_Company',
  'rname' => 'name',
);
$dictionary["jump_InsuranceCharges"]["fields"]["jump_insurancecharges_jump_company_1jump_company_idb"] = array (
  'name' => 'jump_insurancecharges_jump_company_1jump_company_idb',
  'type' => 'link',
  'relationship' => 'jump_insurancecharges_jump_company_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_JUMP_INSURANCECHARGES_JUMP_COMPANY_1_FROM_JUMP_COMPANY_TITLE',
);
