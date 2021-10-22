<!--Experience list -->
<?php $experience_title = get_field('experience_title');?>
<section class="standard">
        <div class="experience-container">
            <div class="experience">
                <h1 class="exptitle"><?php echo $experience_title['ex_title'];?></h1>
            </div>
        </div>
    </section>
    <?php $experience = get_field ("experience"); ?>
    <section class="standard">
        <ul class="list-group list-group-flush">
            <?php foreach($experience as $sub_field): ?>
            <li class="list-group-item">
                <p><a class="link-work" href="<?php echo $sub_field["list_link"];?>"><?php echo $sub_field["list_name"];?></a></p>
                <p><?php echo $sub_field["list_year"];?></p>
                <p><?php echo $sub_field["list_work"];?></p> 
            </li>
            <?php endforeach; ?>
        </ul>
        </section>