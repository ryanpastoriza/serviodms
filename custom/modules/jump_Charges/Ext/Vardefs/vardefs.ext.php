<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-07-25 07:46:28
$dictionary["jump_Charges"]["fields"]["jump_quote_jump_charges_1"] = array (
  'name' => 'jump_quote_jump_charges_1',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_charges_1',
  'source' => 'non-db',
  'module' => 'jump_Quote',
  'bean_name' => 'jump_Quote',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_CHARGES_1_FROM_JUMP_QUOTE_TITLE',
  'id_name' => 'jump_quote_jump_charges_1jump_quote_ida',
);
$dictionary["jump_Charges"]["fields"]["jump_quote_jump_charges_1_name"] = array (
  'name' => 'jump_quote_jump_charges_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_CHARGES_1_FROM_JUMP_QUOTE_TITLE',
  'save' => true,
  'id_name' => 'jump_quote_jump_charges_1jump_quote_ida',
  'link' => 'jump_quote_jump_charges_1',
  'table' => 'jump_quote',
  'module' => 'jump_Quote',
  'rname' => 'name',
);
$dictionary["jump_Charges"]["fields"]["jump_quote_jump_charges_1jump_quote_ida"] = array (
  'name' => 'jump_quote_jump_charges_1jump_quote_ida',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_charges_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_CHARGES_1_FROM_JUMP_CHARGES_TITLE',
);


 // created: 2018-07-25 06:46:43
$dictionary['jump_Charges']['fields']['actualcost2_c']['inline_edit']='1';
$dictionary['jump_Charges']['fields']['actualcost2_c']['labelValue']='Actual Cost';

 

 // created: 2018-07-25 06:47:06
$dictionary['jump_Charges']['fields']['amount2_c']['inline_edit']='1';
$dictionary['jump_Charges']['fields']['amount2_c']['labelValue']='Amount';

 

 // created: 2018-07-25 06:48:17
$dictionary['jump_Charges']['fields']['charge2_c']['inline_edit']='1';
$dictionary['jump_Charges']['fields']['charge2_c']['labelValue']='Charge';

 

 // created: 2018-07-26 05:38:39
$dictionary['jump_Charges']['fields']['chargecode_c']['inline_edit']='1';
$dictionary['jump_Charges']['fields']['chargecode_c']['labelValue']='Charge Code';

 

 // created: 2018-07-26 01:32:17
$dictionary['jump_Charges']['fields']['chargetype2_c']['inline_edit']='1';
$dictionary['jump_Charges']['fields']['chargetype2_c']['labelValue']='Charge Type';

 

 // created: 2018-07-25 06:50:20
$dictionary['jump_Charges']['fields']['description']['inline_edit']=true;
$dictionary['jump_Charges']['fields']['description']['comments']='Full text of the note';
$dictionary['jump_Charges']['fields']['description']['merge_filter']='disabled';

 

 // created: 2018-07-25 06:50:36
$dictionary['jump_Charges']['fields']['description2_c']['inline_edit']='1';
$dictionary['jump_Charges']['fields']['description2_c']['labelValue']='Description';

 

 // created: 2018-07-25 06:50:57
$dictionary['jump_Charges']['fields']['free_c']['inline_edit']='1';
$dictionary['jump_Charges']['fields']['free_c']['labelValue']='Free';

 

 // created: 2018-07-26 05:38:38
$dictionary['jump_Charges']['fields']['jump_chargelist_id_c']['inline_edit']=1;

 

 // created: 2018-07-26 05:39:50
$dictionary['jump_Charges']['fields']['name']['inline_edit']=true;
$dictionary['jump_Charges']['fields']['name']['duplicate_merge']='disabled';
$dictionary['jump_Charges']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['jump_Charges']['fields']['name']['merge_filter']='disabled';
$dictionary['jump_Charges']['fields']['name']['unified_search']=false;

 
?>