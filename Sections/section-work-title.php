<!--Work main image title-->
<?php $work = get_field ('work'); ?>
<section class="standard">
    <?php foreach($work as $sub_field): ?>
    <div class="work-container">
        <img class="imgWORK" src="<?php echo $sub_field['work_img'];?>" alt="">
        <div class="work-text">
            <h1 class="workPRO-1"><?php echo $sub_field['text_work'];?></h1>
        </div>
        </div>
        <?php endforeach; ?>
    </section> 