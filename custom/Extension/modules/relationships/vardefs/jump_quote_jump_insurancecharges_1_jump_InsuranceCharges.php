<?php
// created: 2018-07-25 07:47:38
$dictionary["jump_InsuranceCharges"]["fields"]["jump_quote_jump_insurancecharges_1"] = array (
  'name' => 'jump_quote_jump_insurancecharges_1',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_insurancecharges_1',
  'source' => 'non-db',
  'module' => 'jump_Quote',
  'bean_name' => 'jump_Quote',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_INSURANCECHARGES_1_FROM_JUMP_QUOTE_TITLE',
  'id_name' => 'jump_quote_jump_insurancecharges_1jump_quote_ida',
);
$dictionary["jump_InsuranceCharges"]["fields"]["jump_quote_jump_insurancecharges_1_name"] = array (
  'name' => 'jump_quote_jump_insurancecharges_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_INSURANCECHARGES_1_FROM_JUMP_QUOTE_TITLE',
  'save' => true,
  'id_name' => 'jump_quote_jump_insurancecharges_1jump_quote_ida',
  'link' => 'jump_quote_jump_insurancecharges_1',
  'table' => 'jump_quote',
  'module' => 'jump_Quote',
  'rname' => 'name',
);
$dictionary["jump_InsuranceCharges"]["fields"]["jump_quote_jump_insurancecharges_1jump_quote_ida"] = array (
  'name' => 'jump_quote_jump_insurancecharges_1jump_quote_ida',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_insurancecharges_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_INSURANCECHARGES_1_FROM_JUMP_INSURANCECHARGES_TITLE',
);
