<?php
 // created: 2018-07-30 08:50:10
 // created: 2018-07-27 05:58:48
$layout_defs["m20_Opportunity"]["subpanel_setup"]['m20_opportunity_jump_quote_1'] = array (
  'order' => 100,
  'module' => 'jump_Quote',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_M20_OPPORTUNITY_JUMP_QUOTE_1_FROM_JUMP_QUOTE_TITLE',
  'get_subpanel_data' => 'm20_opportunity_jump_quote_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
