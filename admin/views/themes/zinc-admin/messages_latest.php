    <?php if ($messages) {?>
        <?php foreach ($messages as $message) { ?>

                        <!-- START Notification Item-->
                        <div class="notification-item unread clearfix">
                          <!-- START Notification Item-->
                          <div class="heading">
                            <a href="<?php echo $message['view']; ?>" class="text-complete pull-left">
                              <i class="fa fa-exclamation-triangle m-r-10"></i>
                              <span class="bold"><?php echo $message['from']; ?></span>
                              <span class="fs-12 m-l-10"><?php echo $message['subject']; ?></span>
                            </a>
                            <div class="pull-right">
                              <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                                <div><i class="fa fa-angle-left"></i>
                                </div>
                              </div>
                              <span class=" time"><?php echo $message['date_added']; ?></span>
                            </div>
                            <div class="more-details">
                              <div class="more-details-inner">
                                <h5 class="semi-bold fs-16"><?php echo $message['body']; ?></h5>
                                <p class="small hint-text"><?php echo $message['recipient']; ?></p>
                              </div>
                            </div>
                          </div>
                          <!-- END Notification Item-->
                          <!-- START Notification Item Right Side-->
                          <div class="option" data-toggle="tooltip" data-placement="left" title="">
                            <a href="javascript:void(0);" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>


        <?php } ?>
    <?php } else { ?>
        <?php echo '&nbsp;&nbsp;&nbsp;' . lang('text_empty'); ?>
    <?php } ?>
