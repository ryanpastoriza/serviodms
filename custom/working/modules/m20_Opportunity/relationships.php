<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */


$relationships = array (
  'm20_opportunity_modified_user' => 
  array (
    'id' => 'd2d3d990-3009-ba78-5d74-5b5f81a99a9d',
    'relationship_name' => 'm20_opportunity_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm20_Opportunity',
    'rhs_table' => 'm20_opportunity',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'm20_opportunity_created_by' => 
  array (
    'id' => 'd2f63ae2-b2c8-62c5-1685-5b5f81aeed31',
    'relationship_name' => 'm20_opportunity_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm20_Opportunity',
    'rhs_table' => 'm20_opportunity',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'm20_opportunity_assigned_user' => 
  array (
    'id' => 'd3153f73-8ed5-a2bc-9e3b-5b5f81757e2a',
    'relationship_name' => 'm20_opportunity_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'm20_Opportunity',
    'rhs_table' => 'm20_opportunity',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'securitygroups_m20_opportunity' => 
  array (
    'id' => 'd3342ba1-a90d-93ea-8793-5b5f8180afff',
    'relationship_name' => 'securitygroups_m20_opportunity',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'm20_Opportunity',
    'rhs_table' => 'm20_opportunity',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'm20_Opportunity',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'm20_opportunity_jump_quote_1' => 
  array (
    'id' => '3779f08c-195d-499e-5185-5b5f815450fe',
    'relationship_name' => 'm20_opportunity_jump_quote_1',
    'lhs_module' => 'm20_Opportunity',
    'lhs_table' => 'm20_opportunity',
    'lhs_key' => 'id',
    'rhs_module' => 'jump_Quote',
    'rhs_table' => 'jump_quote',
    'rhs_key' => 'id',
    'join_table' => 'm20_opportunity_jump_quote_1_c',
    'join_key_lhs' => 'm20_opportunity_jump_quote_1m20_opportunity_ida',
    'join_key_rhs' => 'm20_opportunity_jump_quote_1jump_quote_idb',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'm20_opportunity_activities_1_calls' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'Opportunity',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'm20_Opportunity',
    'rhs_module' => 'Calls',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'm20_opportunity_activities_1_calls',
  ),
  'm20_opportunity_activities_1_meetings' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'Opportunity',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'm20_Opportunity',
    'rhs_module' => 'Meetings',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'm20_opportunity_activities_1_meetings',
  ),
  'm20_opportunity_activities_1_notes' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'Opportunity',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'm20_Opportunity',
    'rhs_module' => 'Notes',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'm20_opportunity_activities_1_notes',
  ),
  'm20_opportunity_activities_1_tasks' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'Opportunity',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'm20_Opportunity',
    'rhs_module' => 'Tasks',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'm20_opportunity_activities_1_tasks',
  ),
  'm20_opportunity_activities_1_emails' => 
  array (
    'rhs_label' => 'Activities',
    'lhs_label' => 'Opportunity',
    'rhs_subpanel' => 'Default',
    'lhs_module' => 'm20_Opportunity',
    'rhs_module' => 'Emails',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'm20_opportunity_activities_1_emails',
  ),
);