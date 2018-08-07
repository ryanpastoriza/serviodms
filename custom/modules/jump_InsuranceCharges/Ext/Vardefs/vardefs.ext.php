<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2018-07-25 07:03:51
$dictionary['jump_InsuranceCharges']['fields']['ctpl_c']['inline_edit']='1';
$dictionary['jump_InsuranceCharges']['fields']['ctpl_c']['labelValue']='CTPL';

 

 // created: 2018-08-01 00:36:41
$dictionary['jump_InsuranceCharges']['fields']['insurancecoverage_c']['inline_edit']='1';
$dictionary['jump_InsuranceCharges']['fields']['insurancecoverage_c']['labelValue']='Insurance Coverage';

 

 // created: 2018-07-26 02:34:22
$dictionary['jump_InsuranceCharges']['fields']['jump_company_id_c']['inline_edit']=1;

 

 // created: 2018-07-26 02:34:22
$dictionary['jump_InsuranceCharges']['fields']['providercompany_c']['inline_edit']='1';
$dictionary['jump_InsuranceCharges']['fields']['providercompany_c']['labelValue']='Provider/Company';

 

 // created: 2018-07-25 07:06:15
$dictionary['jump_InsuranceCharges']['fields']['totalinsurancecharges_c']['inline_edit']='1';
$dictionary['jump_InsuranceCharges']['fields']['totalinsurancecharges_c']['labelValue']='Total Insurance Charges';

 

 // created: 2018-07-25 07:06:39
$dictionary['jump_InsuranceCharges']['fields']['totalpremium_c']['inline_edit']='1';
$dictionary['jump_InsuranceCharges']['fields']['totalpremium_c']['labelValue']='Total Premium';

 
?>