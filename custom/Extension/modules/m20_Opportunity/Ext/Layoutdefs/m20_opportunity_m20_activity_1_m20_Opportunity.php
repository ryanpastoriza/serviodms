<?php
 // created: 2018-07-30 08:49:15
$layout_defs["m20_Opportunity"]["subpanel_setup"]['m20_opportunity_m20_activity_1'] = array (
  'order' => 100,
  'module' => 'm20_activity',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_M20_OPPORTUNITY_M20_ACTIVITY_1_FROM_M20_ACTIVITY_TITLE',
  'get_subpanel_data' => 'm20_opportunity_m20_activity_1',
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
