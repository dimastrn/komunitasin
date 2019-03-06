<?php 

function get_template($view) {
    $_this =& get_instance();

    return $_this->load->view($view);
}

function is_active_page_print($page, $class) {
    $_this =& get_instance();
    
    if($page == $_this->uri->segment(1)){
        return $class;
    }

}

 ?>