<?php 
function register_post_custom_field() {
        register_api_field( 'post',
            'custom_field',
            array(
                'get_callback'    => 'get_custom_field',
                'update_callback' => null,
                'schema'          => null,
            )
        );
    }


     ?>