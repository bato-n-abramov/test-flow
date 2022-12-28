<?php 

$fields = $args['fields'];
?>

<?php if (!empty($fields)): ?>

<section class="faq">
    <div class="wrapper">
        <div class="faq__wrapper">
            <div class="faq__content">
            
                <?php if(!empty($fields['title'])) : ?>

                    <h2 class="faq__title"><?php echo $fields['title'] ?></h2>

                <?php endif ?> 
                
                <?php if(!empty($fields['title'])) : ?>

                    <div class="faq__subtitle"><?php echo $fields['subtitle'] ?></div>

                <?php endif ?>
                
                <?php if(!empty($fields['items'])) : ?>

                    <div class="faq__list">
                        
                        <?php foreach($fields['items'] as $item) : ?>

                            <div class="faq__list-item">
                                <div class="faq__list-item__head">

                                    <?php if(!empty($item['question'])) : ?>

                                        <?php echo $item['question'] ?>

                                    <?php endif ?>
                                    
                                </div>
                                <div class="faq__list-item__content">

                                        <?php if(!empty($item['answer'])) : ?>

                                           <div class="faq__list-item__text">

                                                <?php echo $item['answer'] ?>

                                           </div>
                                         
                                        <?php endif ?>    

                                </div>
                            </div>

                        <?php endforeach ?>    

                    </div>

                <?php endif ?>  

            </div>

            <?php if(!empty($fields['image'])) : ?>

                <div class="faq__image">

                    <?php insertImage($fields['image']) ?>

                </div>
            <?php endif ?>

        </div>
    </div>
</section>



<?php endif ?>    