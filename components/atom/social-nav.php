<ul class="list-inline pull-right">
          <?php 
          $social_repeater = get_field('contact_details', 'option');
          for ($social_i=0; $social_i < sizeof($social_repeater); $social_i++) { ?>
            <li>
                <a href='<?php echo $social_repeater[$social_i]['clickable_text']; ?>'>
                    <i class="<?php echo $social_repeater[$social_i]['label'] ?>">
                    <?php echo $social_repeater[$social_i]['text'] ?>
                    </i>
                </a>
            </li>
         <?php } ?>
    </ul>
     <div id="socialbar" class="col-md-12">
        <div class="phone">
           <i class="icon-telephone">
                    </i>
                    <a href="tel:<?php echo get_field('phone', 'option');?> ">
                      <?php echo get_field('phone', 'option');?>
                    </a>
        </div>
        </div>