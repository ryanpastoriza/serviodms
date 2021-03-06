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
          1 => '',
          2 => 'DELETE',
          3 => '',
          4 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="window.print();" value="{$MOD.LBL_PRINT_AS_PDF}">',
          ),
          5 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="setactive();" value="{$MOD.LBL_REVISE}">',
          ),
          6 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="calculate();" value="{$MOD.LBL_REVISE2}">',
          ),
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
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
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
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'm20_opportunity_jump_quote_1_name',
            'label' => 'LBL_M20_OPPORTUNITY_JUMP_QUOTE_1_FROM_M20_OPPORTUNITY_TITLE',
          ),
          1 => 
          array (
            'name' => 'customer2_c',
            'label' => 'LBL_CUSTOMER2',
          ),
        ),
      ),
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
            'name' => 'leadsource_c',
            'studio' => 'visible',
            'label' => 'LBL_LEADSOURCE',
          ),
          1 => 
          array (
            'name' => 'paymentmode_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENTMODE',
          ),
        ),
        3 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'status_c',
            'label' => 'LBL_STATUS',
          ),
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
