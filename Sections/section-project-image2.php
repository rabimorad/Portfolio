<!--Project Grids 2-->
<?php $work_pro = get_field ('work_pro'); ?>
<section class="standard">
    <div class="container">
        <div class="project-post-teasers">
                <?php foreach($work_pro as $sub_field): ?>
                <article class="project-post-teaser">
                    <figure>
                        <img src="<?php echo $sub_field['wpro1'];?>" alt="">
                        <figcaption>
                            <h1><a href="<?php echo $sub_field['wpro_link'];?>"><?php echo $sub_field['wpro_title'];?></a></h1>
                        </figcaption>
                    </figure>
                </article>
                <?php endforeach; ?>
            </div>         
        </section>