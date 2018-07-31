<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-07-25 07:41:55
$dictionary["jump_Quote"]["fields"]["jump_quote_jump_accessories_1"] = array (
  'name' => 'jump_quote_jump_accessories_1',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_accessories_1',
  'source' => 'non-db',
  'module' => 'jump_Accessories',
  'bean_name' => 'jump_Accessories',
  'side' => 'right',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_ACCESSORIES_1_FROM_JUMP_ACCESSORIES_TITLE',
);


// created: 2018-07-25 07:45:49
$dictionary["jump_Quote"]["fields"]["jump_quote_jump_autofinancing_1"] = array (
  'name' => 'jump_quote_jump_autofinancing_1',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_autofinancing_1',
  'source' => 'non-db',
  'module' => 'jump_AutoFinancing',
  'bean_name' => 'jump_AutoFinancing',
  'side' => 'right',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_AUTOFINANCING_1_FROM_JUMP_AUTOFINANCING_TITLE',
);


// created: 2018-07-25 07:46:28
$dictionary["jump_Quote"]["fields"]["jump_quote_jump_charges_1"] = array (
  'name' => 'jump_quote_jump_charges_1',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_charges_1',
  'source' => 'non-db',
  'module' => 'jump_Charges',
  'bean_name' => 'jump_Charges',
  'side' => 'right',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_CHARGES_1_FROM_JUMP_CHARGES_TITLE',
);


// created: 2018-07-25 07:44:19
$dictionary["jump_Quote"]["fields"]["jump_quote_jump_discount_1"] = array (
  'name' => 'jump_quote_jump_discount_1',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_discount_1',
  'source' => 'non-db',
  'module' => 'jump_Discount',
  'bean_name' => 'jump_Discount',
  'side' => 'right',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_DISCOUNT_1_FROM_JUMP_DISCOUNT_TITLE',
);


// created: 2018-07-25 07:47:38
$dictionary["jump_Quote"]["fields"]["jump_quote_jump_insurancecharges_1"] = array (
  'name' => 'jump_quote_jump_insurancecharges_1',
  'type' => 'link',
  'relationship' => 'jump_quote_jump_insurancecharges_1',
  'source' => 'non-db',
  'module' => 'jump_InsuranceCharges',
  'bean_name' => 'jump_InsuranceCharges',
  'side' => 'right',
  'vname' => 'LBL_JUMP_QUOTE_JUMP_INSURANCECHARGES_1_FROM_JUMP_INSURANCECHARGES_TITLE',
);


// created: 2018-07-30 08:50:10
// created: 2018-07-27 05:58:49
$dictionary["jump_Quote"]["fields"]["m20_opportunity_jump_quote_1"] = array (
  'name' => 'm20_opportunity_jump_quote_1',
  'type' => 'link',
  'relationship' => 'm20_opportunity_jump_quote_1',
  'source' => 'non-db',
  'module' => 'm20_Opportunity',
  'bean_name' => 'm20_Opportunity',
  'vname' => 'LBL_M20_OPPORTUNITY_JUMP_QUOTE_1_FROM_M20_OPPORTUNITY_TITLE',
  'id_name' => 'm20_opportunity_jump_quote_1m20_opportunity_ida',
);
$dictionary["jump_Quote"]["fields"]["m20_opportunity_jump_quote_1_name"] = array (
  'name' => 'm20_opportunity_jump_quote_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_M20_OPPORTUNITY_JUMP_QUOTE_1_FROM_M20_OPPORTUNITY_TITLE',
  'save' => true,
  'id_name' => 'm20_opportunity_jump_quote_1m20_opportunity_ida',
  'link' => 'm20_opportunity_jump_quote_1',
  'table' => 'm20_opportunity',
  'module' => 'm20_Opportunity',
  'rname' => 'name',
);
$dictionary["jump_Quote"]["fields"]["m20_opportunity_jump_quote_1m20_opportunity_ida"] = array (
  'name' => 'm20_opportunity_jump_quote_1m20_opportunity_ida',
  'type' => 'link',
  'relationship' => 'm20_opportunity_jump_quote_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_M20_OPPORTUNITY_JUMP_QUOTE_1_FROM_JUMP_QUOTE_TITLE',
);


 // created: 2018-07-25 07:28:14
$dictionary['jump_Quote']['fields']['account_id_c']['inline_edit']=1;

 

 // created: 2018-07-27 02:00:41
$dictionary['jump_Quote']['fields']['aos_products_id_c']['inline_edit']=1;

 

 // created: 2018-07-25 07:17:01
$dictionary['jump_Quote']['fields']['date_entered']['comments']='Date record created';
$dictionary['jump_Quote']['fields']['date_entered']['merge_filter']='disabled';

 

 // created: 2018-07-26 03:14:01
$dictionary['jump_Quote']['fields']['description']['inline_edit']=true;
$dictionary['jump_Quote']['fields']['description']['comments']='Full text of the note';
$dictionary['jump_Quote']['fields']['description']['merge_filter']='disabled';

 

 // created: 2018-07-25 07:27:33
$dictionary['jump_Quote']['fields']['jump_color_id1_c']['inline_edit']=1;

 

 // created: 2018-07-25 07:26:14
$dictionary['jump_Quote']['fields']['jump_color_id_c']['inline_edit']=1;

 

 // created: 2018-07-25 07:17:40
$dictionary['jump_Quote']['fields']['markup_c']['inline_edit']='1';
$dictionary['jump_Quote']['fields']['markup_c']['labelValue']='Markup %';

 

 // created: 2018-07-27 02:00:41
$dictionary['jump_Quote']['fields']['modeldescription_c']['inline_edit']='1';
$dictionary['jump_Quote']['fields']['modeldescription_c']['labelValue']='Model Description';

 

 // created: 2018-07-26 03:29:30
$dictionary['jump_Quote']['fields']['name']['inline_edit']='';
$dictionary['jump_Quote']['fields']['name']['duplicate_merge']='disabled';
$dictionary['jump_Quote']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['jump_Quote']['fields']['name']['merge_filter']='disabled';
$dictionary['jump_Quote']['fields']['name']['unified_search']=false;

 

 // created: 2018-07-25 07:20:59
$dictionary['jump_Quote']['fields']['paymentmode_c']['inline_edit']='1';
$dictionary['jump_Quote']['fields']['paymentmode_c']['labelValue']='Payment Mode';

 

 // created: 2018-07-25 07:26:15
$dictionary['jump_Quote']['fields']['preferredcolor1_c']['inline_edit']='1';
$dictionary['jump_Quote']['fields']['preferredcolor1_c']['labelValue']='Preferred Color 1';

 

 // created: 2018-07-25 07:27:33
$dictionary['jump_Quote']['fields']['preferredcolor2_c']['inline_edit']='1';
$dictionary['jump_Quote']['fields']['preferredcolor2_c']['labelValue']='Preferred Color 2';

 

 // created: 2018-07-25 07:28:14
$dictionary['jump_Quote']['fields']['preferredcolor3_c']['inline_edit']='1';
$dictionary['jump_Quote']['fields']['preferredcolor3_c']['labelValue']='Preferred Color 3';

 

 // created: 2018-07-25 07:19:02
$dictionary['jump_Quote']['fields']['revisionno_c']['inline_edit']=false;
$dictionary['jump_Quote']['fields']['revisionno_c']['labelValue']='Revision No.';

 

 // created: 2018-07-25 07:28:45
$dictionary['jump_Quote']['fields']['unitprice_c']['inline_edit']='1';
$dictionary['jump_Quote']['fields']['unitprice_c']['labelValue']='Unit Price';

 

 // created: 2018-07-25 07:19:41
$dictionary['jump_Quote']['fields']['validuntil_c']['inline_edit']='1';
$dictionary['jump_Quote']['fields']['validuntil_c']['labelValue']='Valid Until';

 

 // created: 2018-07-25 07:29:29
$dictionary['jump_Quote']['fields']['vehicledetails_c']['inline_edit']='1';
$dictionary['jump_Quote']['fields']['vehicledetails_c']['labelValue']='Vehicle Details';

 
?>