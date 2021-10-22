<!--Project Grids-->
<?php $pro_image = get_field ("pro_image"); ?>
<section class="standard">
    <div class="container">
        <div class="project-post-teasers">
                <?php foreach($pro_image as $sub_field): ?>
                <article class="project-post-teaser">
                    <figure>
                        <img src="<?php echo $sub_field["pro_img"];?>" alt="">
                        <figcaption>
                            <h1><a href="<?php echo $sub_field["pro_link"];?>"><?php echo $sub_field["pro_img_text"];?></a></h1>
                        </figcaption>
                    </figure>
                </article>
                <?php endforeach; ?>
            </div>         
        </section>