     <?php

        // WP_Query arguments
      $args = array (
        "post_type" => "any",
        "post__in" => $vars['website_items'],
        "orderby" => "post__in",

      );
      $club_count = 0;
      // The Query
      $query = new WP_Query( $args );

      // The Loop
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();

          switch (get_post_type()) {
            case 'product':
             /*=============================================
            = Card (Class,Image,Title,Content)
            = @components
              + molecule/card
            =============================================*/
            get_component([ 'template' => 'molecule/card-product',
                            'remove_tags'=>['h6'],
                            'vars' => [
                                  "class" => 'col-md-6 product padding-4-top padding-4-bottom '.get_field('product_color'),
                                  "title" => get_the_title(),
                                  "image" => getFeaturedUrl(),
                                  "content" => get_the_content(),
                                  "button" => [ [
                                                "text" => "Add to Cart",
                                                "link" => do_shortcode('[add_to_cart_url id="'.get_the_id().'"]'),
                                                "external_link" => do_shortcode('[add_to_cart_url id="'.get_the_id().'"]'),
                                                'link_type' => 'external',
                                                    ]
                                            ]

                                  ]
                             ]);
            break;
            case 'event':
             /*=============================================
            = Event Card (Class,Image,Title,Content)
            = @components
              + molecule/card
            =============================================*/
            get_component([ 'template' => 'molecule/card-event',
                            'remove_tags'=>['h6'],
                            'vars' => [
                                  "class" => 'col-md-6 related-item',
                                  "title" => get_the_title(),
                                  "image" => get_field("image"),
                                  "content" => get_the_content(),
                                  "button" => get_component([
                                      'template' => 'atom/link',
                                      'return_string' => true,
                                      'vars' => [
                                        "class" => 'btn text-uppercase pull-left',
                                        "text" => "Read More",
                                        "internal_link" => get_permalink(),
                                        'link_type' => 'internal',
                                            ]
                                      ])
                                  ]
                             ]);
              break;
              case 'club':
                $club_count++;
                $temp_class = 'grey-light-bg';
                if($club_count%2 == 0){
                  $temp_class = 'grey-bg';
                }
                            /*=============================================
                             = Club Card (Class,Logo,Title,Content)
                             = @components
                               + atom/button-list
                             =============================================*/
                             get_component([ 'template' => 'molecule/card-club',
                                             'remove_tags'=>['h6'],
                                             'vars' => [
                                                   "class" => 'col-md-6 card club padding-4-top padding-4-bottom '.$temp_class,
                                                   "title" => get_the_title(),
                                                   "image" => get_field("logo"),
                                                   "content" => get_the_content(),
                                                   "button" =>
                                                          [[
                                                         "class" => 'btn text-uppercase',
                                                         "text" => "Read More",
                                                          "internal_link" => get_permalink(),
                                                         'link_type' => 'internal',
                                                             ]]
                                                   ]
                                              ]);
            break;
            default:
            /*=============================================
            = Card (Class,Image,Title,Subtitle,Content)
            = @components
              + molecule/card
            =============================================*/
            get_component([ 'template' => 'molecule/card',
                            'vars' => [
                                  "class" => 'col-md-6 related-item',
                                  "title" => get_the_title(),
                                  "image" => get_field("image"),
                                  "content" => get_the_content(),
                                  "button" => get_component([
                                      'template' => 'atom/link',
                                      'return_string' => true,
                                      'vars' => [
                                        "class" => 'btn text-uppercase pull-left',
                                        "text" => "Read More",
                                        "link" => get_permalink(),
                                        'link_type' => 'internal',
                                            ]
                                      ])
                                  ]
                             ]);
                 break;
          } //switch

        } //while
      } else {
        // no posts found
      }

      // Restore original Post Data
      wp_reset_postdata();
          ?>
    <!-- </div> -->
