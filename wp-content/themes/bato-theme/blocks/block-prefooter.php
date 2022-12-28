<?php 

$fields = $args['fields'];

?>

<?php if (!empty($fields)): ?>

<section class="prefooter">
    
    <?php if(!empty($fields['image'])) : ?>

        <div class="prefooter__image">

            <?php insertImage($fields['image']) ?>

        </div>

    <?php endif ?>
    
    <div class="wrapper">
        <div class="prefooter__wrapper">

            <?php if(!empty($fields['title'])) : ?>

                <h2 class="prefooter__title"><?php echo $fields['title'] ?></h2>
            
            <?php endif ?>    

            <?php if(!empty($fields['cta'])) : ?>

                <a href="<?php echo $fields['cta']['url'] ?>" class="prefooter__cta btn-white"><?php echo $fields['cta']['title'] ?></a>
            
            <?php endif ?>  

        </div>
    </div>

</section>

<?php endif ?>    