<?php
$module_name = 'm20_Opportunity';
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
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'customer_c',
            'studio' => 'visible',
            'label' => 'LBL_CUSTOMER',
          ),
          1 => 
          array (
            'name' => 'inq_num_c',
            'label' => 'LBL_INQ_NUM',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'lead_source_c',
            'studio' => 'visible',
            'label' => 'LBL_LEAD_SOURCE',
          ),
          1 => 
          array (
            'name' => 'budget_amount_c',
            'label' => 'LBL_BUDGET_AMOUNT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'purchased_timeframe_c',
            'studio' => 'visible',
            'label' => 'LBL_PURCHASED_TIMEFRAME',
          ),
          1 => 
          array (
            'name' => 'estimated_closedate_c',
            'label' => 'LBL_ESTIMATED_CLOSEDATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sales_executive_c',
            'studio' => 'visible',
            'label' => 'LBL_SALES_EXECUTIVE',
          ),
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'base_model_c',
            'studio' => 'visible',
            'label' => 'LBL_BASE_MODEL',
          ),
          1 => 
          array (
            'name' => 'color_c',
            'studio' => 'visible',
            'label' => 'LBL_COLOR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'model_description_c',
            'studio' => 'visible',
            'label' => 'LBL_MODEL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'paymentmode_c',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENTMODE',
          ),
          1 => 
          array (
            'name' => 'financing_term_c',
            'studio' => 'visible',
            'label' => 'LBL_FINANCING_TERM',
          ),
        ),
      ),
    ),
  ),
);
;
?>
