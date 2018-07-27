<?php
$module_name = 'jump_Accessories';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
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
            'name' => 'itemno2_c',
            'studio' => 'visible',
            'label' => 'LBL_ITEMNO2',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'itemdescription2_c',
            'label' => 'LBL_ITEMDESCRIPTION2',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'free_c',
            'label' => 'LBL_FREE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
