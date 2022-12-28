<?php 

$fields = $args['fields'];

// dd($fields);
?>


<?php if (!empty($fields)): ?>

<section class="video">

    <?php if(!empty($fields['image'])) : ?>

        <div class="video__element">

            <div class="video__element-poster">

                <?php insertImage($fields['image']) ?>

            </div>

            <?php if(!empty($fields['video_provider']) && !empty($fields['video_id']))  : ?>
                
                <div class="video__play">

                    <?php insertImage('play.svg') ?>

                </div>

                <div class="video__element--player" data-plyr-provider =<?php echo $fields['video_provider'] ?> data-plyr-embed-id="<?php echo $fields['video_id']  ?>" hideControls></div>
            
            <?php endif ?>    

        </div>

    <?php endif ?>    

</section>

<?php endif ?>    