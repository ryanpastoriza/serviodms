<?php
$module_name = 'jump_prospect_inquiry';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '5',
          'field' => '20',
        ),
        1 => 
        array (
          'label' => '5',
          'field' => '20',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prospect_type_c',
            'studio' => 'visible',
            'label' => 'LBL_PROSPECT_TYPE',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fname_c',
            'label' => 'LBL_FNAME',
          ),
          1 => 
          array (
            'name' => 'company_name_c',
            'label' => 'LBL_COMPANY_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'mname_c',
            'label' => 'LBL_MNAME',
          ),
          1 => 
          array (
            'name' => 'website_c',
            'label' => 'LBL_WEBSITE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'lname_c',
            'label' => 'LBL_LNAME',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
