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
  'jump_quote_modified_user' => 
  array (
    'id' => 'd2bfafe0-af01-726b-5929-5b582a2d3336',
    'relationship_name' => 'jump_quote_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jump_Quote',
    'rhs_table' => 'jump_quote',
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
  'jump_quote_created_by' => 
  array (
    'id' => 'd436b187-afb7-05a9-9343-5b582a8b1457',
    'relationship_name' => 'jump_quote_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jump_Quote',
    'rhs_table' => 'jump_quote',
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
  'jump_quote_assigned_user' => 
  array (
    'id' => 'd5cd0c37-3c49-73f7-f3e1-5b582af29d05',
    'relationship_name' => 'jump_quote_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'jump_Quote',
    'rhs_table' => 'jump_quote',
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
  'securitygroups_jump_quote' => 
  array (
    'id' => 'd7a1db9c-d3dd-78a2-85b3-5b582a9b1014',
    'relationship_name' => 'securitygroups_jump_quote',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'jump_Quote',
    'rhs_table' => 'jump_quote',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'jump_Quote',
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
  'jump_quote_jump_accessories_1' => 
  array (
    'id' => '87d1a3ad-cf99-4922-a100-5b582a68535c',
    'relationship_name' => 'jump_quote_jump_accessories_1',
    'lhs_module' => 'jump_Quote',
    'lhs_table' => 'jump_quote',
    'lhs_key' => 'id',
    'rhs_module' => 'jump_Accessories',
    'rhs_table' => 'jump_accessories',
    'rhs_key' => 'id',
    'join_table' => 'jump_quote_jump_accessories_1_c',
    'join_key_lhs' => 'jump_quote_jump_accessories_1jump_quote_ida',
    'join_key_rhs' => 'jump_quote_jump_accessories_1jump_accessories_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'jump_quote_jump_autofinancing_1' => 
  array (
    'id' => '8967ffbb-c6b4-3111-ab0b-5b582a15080d',
    'relationship_name' => 'jump_quote_jump_autofinancing_1',
    'lhs_module' => 'jump_Quote',
    'lhs_table' => 'jump_quote',
    'lhs_key' => 'id',
    'rhs_module' => 'jump_AutoFinancing',
    'rhs_table' => 'jump_autofinancing',
    'rhs_key' => 'id',
    'join_table' => 'jump_quote_jump_autofinancing_1_c',
    'join_key_lhs' => 'jump_quote_jump_autofinancing_1jump_quote_ida',
    'join_key_rhs' => 'jump_quote_jump_autofinancing_1jump_autofinancing_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'jump_quote_jump_charges_1' => 
  array (
    'id' => '8adf0a3d-2094-d786-f492-5b582a3881ef',
    'relationship_name' => 'jump_quote_jump_charges_1',
    'lhs_module' => 'jump_Quote',
    'lhs_table' => 'jump_quote',
    'lhs_key' => 'id',
    'rhs_module' => 'jump_Charges',
    'rhs_table' => 'jump_charges',
    'rhs_key' => 'id',
    'join_table' => 'jump_quote_jump_charges_1_c',
    'join_key_lhs' => 'jump_quote_jump_charges_1jump_quote_ida',
    'join_key_rhs' => 'jump_quote_jump_charges_1jump_charges_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'jump_quote_jump_discount_1' => 
  array (
    'id' => '8c75522e-f16b-e522-4f55-5b582a5a8e75',
    'relationship_name' => 'jump_quote_jump_discount_1',
    'lhs_module' => 'jump_Quote',
    'lhs_table' => 'jump_quote',
    'lhs_key' => 'id',
    'rhs_module' => 'jump_Discount',
    'rhs_table' => 'jump_discount',
    'rhs_key' => 'id',
    'join_table' => 'jump_quote_jump_discount_1_c',
    'join_key_lhs' => 'jump_quote_jump_discount_1jump_quote_ida',
    'join_key_rhs' => 'jump_quote_jump_discount_1jump_discount_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'jump_quote_jump_insurancecharges_1' => 
  array (
    'rhs_label' => 'Insurance Charges',
    'lhs_label' => 'Quote',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'jump_Quote',
    'rhs_module' => 'jump_InsuranceCharges',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'jump_quote_jump_insurancecharges_1',
  ),
);