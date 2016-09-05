
<div class="<?php echo $vars['class'] ?> molecule image-grid ">
 <?php
        foreach ($vars['image_list'] as $item) {?>
                  <?php
                  // debug($vars);
              get_component([ 'template' => 'molecule/card',
                            'remove_tags'=> $item['remove_elements'],
                            'vars' => [
                                  "class" => 'card '.get_field('product_color').' col-md-'.$vars['column_number'],
                                  "title" =>  $item['title'],
                                  "subtitle" =>  $item['subtitle'],
                                  "image" =>  $item['image'],
                                  "content" =>  $item['content'],
                                  "button_list" =>  $item['button_list']
                                            

                                  ]
                             ]);
?>
          
        <?php } ?>
      </ul>
</div>
