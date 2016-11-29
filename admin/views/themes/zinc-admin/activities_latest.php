    <?php if ($activities) {?>
        <?php foreach ($activities as $activity) { ?>
            <li class="alert-list <?php echo $activity['state']; ?>">
                <div data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax" data-allow-click="1" style="height: 45px;">
                    <p class="col-xs-height col-middle">
                        <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                    </p>
                    <p class="p-l-10 col-xs-height col-middle col-xs-8 overflow-ellipsis fs-12">
                        <span class="text-master"><?php echo $activity['message']; ?></span>
                    </p>
                    <p class="p-r-10 col-xs-height col-middle fs-12 text-right">
                        <span class="text-warning"><?php echo $activity['time']; ?> <br></span>
                        <span class="text-master"><?php echo $activity['time_elapsed']; ?></span>
                    </p>
                </div>


            </li>
        <?php } ?>
    <?php } else { ?>
        <li><?php echo lang('text_empty'); ?></li>
    <?php } ?>
        <li><a class="text-center" href="<?php echo site_url('activities'); ?>"><?php echo lang('text_see_all_activity'); ?></a></li>

