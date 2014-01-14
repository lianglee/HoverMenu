<?php
elgg_register_event_handler('init', 'system', 'hovermenu');

function hovermenu(){
 elgg_extend_view('js/initialize_elgg', 'hovermenu/js');	
}