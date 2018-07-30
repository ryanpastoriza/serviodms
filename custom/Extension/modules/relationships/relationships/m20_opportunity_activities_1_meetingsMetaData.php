<?php
// created: 2018-07-30 08:08:19
$dictionary["m20_opportunity_activities_1_meetings"] = array (
  'relationships' => 
  array (
    'm20_opportunity_activities_1_meetings' => 
    array (
      'lhs_module' => 'm20_Opportunity',
      'lhs_table' => 'm20_opportunity',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'm20_Opportunity',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);