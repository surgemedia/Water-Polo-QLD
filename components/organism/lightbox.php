<?php  get_component([ 'template' => 'molecule/lightbox',
                         'remove_tags' =>  $value['remove_elements'],
                         'vars' => [
                               "trigger_element" => get_field('trigger_element'),
                               
                               ] ]);?>