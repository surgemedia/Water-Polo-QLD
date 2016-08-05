<?php 
function get_section_options($vars){
	$search = array_search("show_advanced", array_keys($vars));
	$tempVars = array_slice($vars, $search);
	$sizeof = sizeof($tempVars);
	foreach ($tempVars as $key => $value) {
				//Normal Options
    		if(is_array($tempVars[$key]) && $key != 'border'){
    					if(isset($tempVars[$key][0])){
                $tempVars[$key] = $tempVars[$key][0];
                }
    		}
    		//Border
    		if(is_array($tempVars[$key]) && $key == 'border'){
    					$tempVars['border'] = $tempVars[$key][0].' '.$tempVars[$key][1].' '.$tempVars[$key][2].' '.$tempVars[$key][3];
    		}
	    }
	    return $tempVars;
    };