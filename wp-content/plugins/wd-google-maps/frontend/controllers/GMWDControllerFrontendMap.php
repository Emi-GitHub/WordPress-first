<?php

class GMWDControllerFrontendMap extends  GMWDControllerFrontend{
	////////////////////////////////////////////////////////////////////////////////////////
	// Events                                                                             //
	////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	// Constants                                                                          //
	////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	// Variables                                                                          //
	////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	// Constructor & Destructor                                                           //
	////////////////////////////////////////////////////////////////////////////////////////

	////////////////////////////////////////////////////////////////////////////////////////
	// Public Methods                                                                     //
	////////////////////////////////////////////////////////////////////////////////////////
	public function get_ajax_markers(){
		global $wpdb;
       
		$id = (int)$_POST["map_id"];
		
		$markers = $wpdb->get_results("SELECT T_MARKERS.* FROM  " . $wpdb->prefix . "gmwd_markers  AS T_MARKERS WHERE T_MARKERS.published = '1' AND T_MARKERS.map_id= '".$id."'  ORDER BY id");
        $row_all_markers = array();
		foreach($markers as $marker){
            $row_all_markers[$marker->id] = $marker;			
		}
		echo json_encode($row_all_markers);
		die();	
	}
 	public function get_ajax_store_loactor(){
		global $wpdb;

		$id = (int)$_POST["map_id"];
		$radius = floatval($_POST["radius"]);
		$lat = floatval($_POST["lat"]);
		$lng = floatval($_POST["lng"]);
		$distance_in = sanitize_text_field(stripslashes($_POST["distance_in"]));

        $distance_in =  $distance_in == "km" ? 6371 : 3959;

		$markers = $wpdb->get_results("SELECT T_MARKERS.*, ( ".$distance_in." * acos( cos( radians(".$lat.") ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(".$lng.") ) + sin( radians(".$lat.") ) * sin( radians( lat ) ) ) ) AS distance FROM (SELECT * FROM " . $wpdb->prefix . "gmwd_markers WHERE published = '1' AND map_id= '".$id."' ) AS T_MARKERS HAVING distance<".$radius." " );
        
  

		echo json_encode($markers);
		die();	
	}

    public function ajax_accept_gdpr(){
        setcookie('gmwd_gdpr_accept', '1', 2147483647, "/");
        die();
    }
    		
	////////////////////////////////////////////////////////////////////////////////////////
	// Getters & Setters                                                                  //
	////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	// Private Methods                                                                    //
	////////////////////////////////////////////////////////////////////////////////////////

	////////////////////////////////////////////////////////////////////////////////////////
	// Listeners                                                                          //
	////////////////////////////////////////////////////////////////////////////////////////
}