<?php 

$fields = $args['fields'];

?>


<?php if (!empty($fields)): ?>

<section class="slider">
    <div class="wrapper">
        <div class="slider__wrapper">

            <?php if(!empty($fields['title'])) : ?>

                <h2 class="slider__title"><?php echo $fields['title'] ?></h2>

            <?php endif ?>

            <?php if(!empty($fields['subtitle'])) : ?>

                <div class="slider__subtitle"><?php echo $fields['subtitle'] ?></div>

            <?php endif ?> 

            <?php if(!empty($fields['slides'])) : ?>

                <div class="slider__slider swiper">

                    <div class="swiper-wrapper">

                        <?php foreach($fields['slides'] as $slide) : ?>

                            <div class="swiper-slide">

                                <div class="slider__slide">
                                    
                                    <?php if(!empty($slide['text'])) : ?>

                                        <div class="slider__slide-text"><?php echo $slide['text'] ?></div>
                                    
                                    <?php endif ?>
                                    
                                    <div class="slider__slide-bottom">

                                        <?php if(!empty($slide['image'])) : ?>

                                            <div class="slider__slide-image"><?php insertImage($slide['image']) ?></div>
                                        
                                        <?php endif ?> 
                                        
                                        <div class="slider__slide-info">

                                            <?php if(!empty($slide['name'])) : ?>

                                                <h3 class="slider__slide-name"><?php echo $slide['name'] ?></h3>

                                            <?php endif ?>
                                            
                                             <?php if(!empty($slide['post'])) : ?>

                                                <p class="slider__slide-post"><?php echo $slide['post'] ?></p>

                                            <?php endif ?> 

                                        </div>

                                    </div>

                                </div>

                            </div>

                        <?php endforeach ?>    

                    </div>
                    <div class="slider__pagination"></div>
                </div>

            <?php endif ?>    

        </div>
    </div>
</section>

<?php endif ?>    