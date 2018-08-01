<?php
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
