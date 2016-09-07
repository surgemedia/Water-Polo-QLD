<section class="homepage-heading owl-carousel" >
    <?php
      foreach ($vars['element'] as $key => $value) { ?>
      <?php //debug($vars); ?>
     <div class="slide" >
     
       <?php  get_component([ 'template' => 'molecule/card-homepage',
                         'remove_tags' =>  $value['remove_elements'],
                         'vars' => [
                               "class" => 'card col-lg-4 col-md-4 col-sm-6 pull-right pattern-bg '.$value['background_color'] ,
                               "title" => $value['title'],
                               "subtitle" => $value["subtitle"],
                                "image" => $value["image"],
                               "content" => apply_filters('the_content',  $value["content"]),
                               "button" => $value['button_list']['button']
                               ]
                          ]);?>
      </div> 
      <?php }
    ?>

</section>

