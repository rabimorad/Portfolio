<!--Image text Link -->
<?php $image_text = get_field ("image_text"); ?>
<section class="standard">
    <?php foreach($image_text as $sub_field): ?>
    <div class="imgtext-container">
        <img class="img1" src="<?php echo $sub_field["image_1"];?>" alt="">
                <div class="worktext">
                    <h1 class="work-1"><a href="<?php echo $sub_field['page_link']; ?>"><?php echo $sub_field["content_1"];?></a></h1>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>