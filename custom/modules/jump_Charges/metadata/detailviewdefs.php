<?php
$module_name = 'jump_Charges';
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
            'name' => 'free_c',
            'label' => 'LBL_FREE',
          ),
        ),
        1 => 
        array (
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'chargetype2_c',
            'studio' => 'visible',
            'label' => 'LBL_CHARGETYPE2',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'amount2_c',
            'label' => 'LBL_AMOUNT2',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'actualcost2_c',
            'label' => 'LBL_ACTUALCOST2',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description2_c',
            'label' => 'LBL_DESCRIPTION2',
          ),
        ),
      ),
    ),
  ),
);
;
?>
