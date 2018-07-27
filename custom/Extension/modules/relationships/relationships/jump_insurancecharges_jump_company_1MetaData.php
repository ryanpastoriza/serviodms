<?php
// created: 2018-07-26 02:23:33
$dictionary["jump_insurancecharges_jump_company_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'jump_insurancecharges_jump_company_1' => 
    array (
      'lhs_module' => 'jump_InsuranceCharges',
      'lhs_table' => 'jump_insurancecharges',
      'lhs_key' => 'id',
      'rhs_module' => 'jump_Company',
      'rhs_table' => 'jump_company',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'jump_insurancecharges_jump_company_1_c',
      'join_key_lhs' => 'jump_insurancecharges_jump_company_1jump_insurancecharges_ida',
      'join_key_rhs' => 'jump_insurancecharges_jump_company_1jump_company_idb',
    ),
  ),
  'table' => 'jump_insurancecharges_jump_company_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'jump_insurancecharges_jump_company_1jump_insurancecharges_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'jump_insurancecharges_jump_company_1jump_company_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'jump_insurancecharges_jump_company_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'jump_insurancecharges_jump_company_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'jump_insurancecharges_jump_company_1jump_insurancecharges_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'jump_insurancecharges_jump_company_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'jump_insurancecharges_jump_company_1jump_company_idb',
      ),
    ),
  ),
);