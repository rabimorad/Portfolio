<?php /*  Template Name: Template Poject Four   */ ?>
<?php get_header();?>
<?php $work = get_field('work');?>
<div>
    <img class="img1" src="<?php echo $work['workpro_image'];?>" alt="">
</div>
<div class="worktext">
    <h1 class="work-1"><?php echo $work['workpro_title'];?></h1>
</div>
<?php $big_work = get_field('big_work');?>
<div class="textbox">
        <p class="p"><?php echo $big_work['big_work_text'];?></p>
    </div>
    <div class="weblink">
        <a class="webtext" href="https://torgkrogenvisby.se/"><?php echo $big_work['big_work_link'];?></a>    
    </div>
    <div>
        <img class="bigimg" src="<?php echo $big_work['big_work_img'];?>" alt="">
    </div>
    <?php $work_pro = get_field('work_pro');?>
    <div class="project">
        <h1 class="titletext"><?php echo $work_pro['work_pro_title'];?></h1>
    </div>
    <div>
        <a href="http://localhost/RMportfolio/Project1/"><img class="pro1" src="<?php echo $work_pro['wpro1'];?>" alt=""></a>
    </div>
    <div>
        <a href="http://localhost/RMportfolio/Project2/"><img class="pro2" src="<?php echo $work_pro['wpro2'];?>" alt=""></a>
    </div>
    <div>
        <a href="http://localhost/RMportfolio/Project3/"><img class="pro3" src="<?php echo $work_pro['wpro3'];?>" alt=""></a>
    </div>
    <div>
        <a href="http://localhost/RMportfolio/Project4/"><img class="pro4" src="<?php echo $work_pro['wpro4'];?>" alt=""></a>
    </div>
    <div>
        <a href="http://localhost/RMportfolio/Project5/"><img class="pro5" src="<?php echo $work_pro['wpro5'];?>" alt=""></a>
    </div>
    <div>
        <a href="http://localhost/RMportfolio/Project6/"><img class="pro6" src="<?php echo $work_pro['wpro6'];?>" alt=""></a>
    </div>
<?php get_footer();?>