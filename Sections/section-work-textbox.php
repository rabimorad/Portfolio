<!--Work Textbox-->
<?php $big_work = get_field('big_work');?>
<section class="standard">
        <div class="work-container">
            <div class="work-textbox">
                <p class="work-p"><?php echo $big_work['big_work_text'];?></p>
                    <a class="webtext" href="<?php echo $big_work['big_work_link'];?>"><?php echo $big_work['big_work_link_text'];?></a>
                </div>
            </div>
        </section>