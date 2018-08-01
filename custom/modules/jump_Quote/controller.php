<?php
require_once('custom/include/database/CDBManager.php');

class Jump_QuoteController extends SugarController
{
    public function action_make_active() {
        $q_id = $_REQUEST['q_id'];
        $db = DBManagerFactory::getInstance();
        
        $query = " 	UPDATE jump_quote_cstm SET status_c = 'Active' WHERE id_c = '" . $q_id . "'";
        $execute = $db->query($query, true);
        
    }
    
}    
