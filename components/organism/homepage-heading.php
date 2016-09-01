<section class="homepage-heading owl-carousel" >
    <?php
      foreach ($vars['element'] as $key => $value) { ?>
      <?php //debug($vars); ?>
     <div class="slide" >
     
       <?php  get_component([ 'template' => 'molecule/card-homepage',
                         'remove_tags' =>  $value['remove_elements'],
                         'vars' => [
                               "class" => 'card col-md-4 pull-right blue-bg pattern-bg',
                               "title" => $value['title'],
                               "subtitle" => $value["subtitle"],
                                "image" => $value["image"],
                               "content" => apply_filters('the_content',  $value["content"]),
                               "button" => $value['button']
                               ]
                          ]);?>
      </div>
      <div class="dotcontainer">
      </div>    
      <?php }
    ?>

</section>

