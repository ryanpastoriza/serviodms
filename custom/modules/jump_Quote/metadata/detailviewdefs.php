<?php
$module_name = 'jump_Quote';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'revisionno_c',
            'label' => 'LBL_REVISIONNO',
          ),
        ),
        1 => 
        array (
          0 => 'date_entered',
          1 => 
          array (
            'name' => 'validuntil_c',
            'label' => 'LBL_VALIDUNTIL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'paymentmode_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENTMODE',
          ),
        ),
        3 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'modeldescription_c',
            'studio' => 'visible',
            'label' => 'LBL_MODELDESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'unitprice_c',
            'label' => 'LBL_UNITPRICE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'preferredcolor1_c',
            'studio' => 'visible',
            'label' => 'LBL_PREFERREDCOLOR1',
          ),
          1 => 
          array (
            'name' => 'vehicledetails_c',
            'studio' => 'visible',
            'label' => 'LBL_VEHICLEDETAILS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'preferredcolor2_c',
            'studio' => 'visible',
            'label' => 'LBL_PREFERREDCOLOR2',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'preferredcolor3_c',
            'studio' => 'visible',
            'label' => 'LBL_PREFERREDCOLOR3',
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
