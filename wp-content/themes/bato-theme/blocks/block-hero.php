<?php 

$fields = $args['fields'];

?>


<?php if (!empty($fields)): ?>

<section class="hero">
    <div class="hero__wrapper">
        <div class="wrapper">
            <div class="hero__content">

                <div class="hero__text">

                    <?php if(!empty($fields['title'])) : ?>

                        <h1 class="hero__title"><?php echo $fields['title'] ?></h1>

                    <?php endif ?>

                    <?php if(!empty($fields['cta'])) : ?>

                        <a class="hero__cta btn-white" href="<?php echo $fields['cta']['url'] ?>" >
                        
                            <?php echo $fields['cta']['title'] ?>

                        </a>

                    <?php endif ?>   

                </div>
                
                <?php if(!empty($fields['image'])) : ?>

                    <div class="hero__image">

                        <?php insertImage($fields['image']) ?>

                    </div>

                <?php endif; ?>    

            </div>
        </div>
    </div>
</section>

<?php endif; ?>
