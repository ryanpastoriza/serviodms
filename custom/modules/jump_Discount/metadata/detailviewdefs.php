<?php
$module_name = 'jump_Discount';
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
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'jump_quote_jump_discount_1_name',
            'label' => 'LBL_JUMP_QUOTE_JUMP_DISCOUNT_1_FROM_JUMP_QUOTE_TITLE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'promoname_c',
            'label' => 'LBL_PROMONAME',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'discountname_c',
            'label' => 'LBL_DISCOUNTNAME',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description2_c',
            'label' => 'LBL_DESCRIPTION2',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'discountamount_c',
            'label' => 'LBL_DISCOUNTAMOUNT',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'applyptodp_c',
            'label' => 'LBL_APPLYPTODP',
          ),
          1 => 
          array (
            'name' => 'applyamounttodp_c',
            'label' => 'LBL_APPLYAMOUNTTODP',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'applyptoaf_c',
            'label' => 'LBL_APPLYPTOAF',
          ),
          1 => 
          array (
            'name' => 'applyamounttoaf_c',
            'label' => 'LBL_APPLYAMOUNTTOAF',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'applyptoup_c',
            'label' => 'LBL_APPLYPTOUP',
          ),
          1 => 
          array (
            'name' => 'applyamounttoup_c',
            'label' => 'LBL_APPLYAMOUNTTOUP',
          ),
        ),
      ),
    ),
  ),
);
;
?>
