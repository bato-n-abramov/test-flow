<?php 

$fields = $args['fields'];

?>


<?php if (!empty($fields)): ?>

<section class="items">
    <div class="wrapper">
        <div class="items__wrapper">

            <?php if(!empty($fields['title'])) : ?>

                <h2 class="items__title"><?php echo $fields['title'] ?></h2>

            <?php endif ?>

            <?php if(!empty($fields['subtitle'])) : ?>

                <div class="items__subtitle"><?php echo $fields['subtitle'] ?></div>

            <?php endif ?> 
            
            <?php if(!empty($fields['items'])) : ?>

                <div class="items__list">

                    <?php foreach($fields['items'] as $item) : ?>

                        <div class="items__list__item">

                            <?php if(!empty($item['icon'])) : ?>
                            
                               <div class="items__list__item-icon">

                                <?php insertImage($item['icon']) ?>

                               </div>
                                
                            <?php endif ?>
                            
                            <?php if(!empty($item['title'])) : ?>

                                <h3 class="items__list__item-title"><?php echo $item['title'] ?></h3>

                            <?php endif ?>
                            
                            <?php if(!empty($item['text'])) : ?>

                                <div class="items__list__item-text"><?php echo $item['text'] ?></div>

                            <?php endif ?> 

                        </div>
                    
                    <?php endforeach ?> 

                </div>
            
            <?php endif ?>    

        </div>
    </div>
</section>


<?php endif ?>    