<?php 

$fields = $args['fields'];

?>

<?php if (!empty($fields)): ?>

<section class="image-text">
    <div class="wrapper">
        <div class="image-text__wrapper">

            <?php if(!empty($fields['image'])) : ?>

                <div class="image-text__image"><?php insertImage($fields['image']) ?></div>

            <?php endif ?>
            
            <div class="image-text__text">

                <?php if(!empty($fields['title'])) : ?>

                    <h2 class="image-text__title"><?php echo $fields['title'] ?></h2>

                <?php endif ?> 

                <?php if(!empty($fields['text'])) : ?>

                    <div class="image-text__info"><?php echo $fields['text'] ?></div>

                <?php endif ?>
                
                <?php if(!empty($fields['items'])) : ?>

                    <div class="image-text__list">

                        <?php foreach($fields['items'] as $item) : ?>

                            <div class="image-text__list-item">

                                <?php if(!empty($item['percentage'])) : ?>

                                    <div class="image-text__list-item__text"><?php echo $item['percentage'] ?></div>

                                <?php endif ?> 
                                
                                <?php if(!empty($item['image'])) : ?>

                                    <div class="image-text__list-item__img"><?php  insertImage($item['image']) ?></div>

                                <?php endif ?> 

                            </div>

                        <?php endforeach ?>    

                    </div>

                <?php endif ?>    

            </div>

        </div>
    </div>
</section>    

<?php endif ?>    