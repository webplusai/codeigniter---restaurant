<?php echo get_header(); ?>
<div class="container-fluid container-fixed-lg">


            <div class="timeline-container top-circle">
              <section class="timeline">



            <?php if ($activities) { ?>
                    <?php foreach ($activities as $date_added => $activities) { ?>
                        <?php foreach ($activities as $activity) { ?>
                <!-- timeline-block -->
                <div class="timeline-block">
                  <div class="timeline-point warning">
                        <i class="<?php echo $activity['icon']; ?>"></i>
                  </div>
                  <!-- timeline-point -->
                  <div class="timeline-content">
                    <div class="card share full-width">
                        <div data-original-title="" class="circle" data-toggle="tooltip" title="" data-container="body"></div>
                        <div class="card-header clearfix">
                        <!--
                        <div class="user-pic">
                          &nbsp;
                        </div>
                        -->
                        <h5><?php echo $activity['domain']; ?></h5>
                        <!--
                        <h6>&nbsp;</h6>
                        -->
                      </div>

                      <div class="card-description">
                        <?php echo $activity['message']; ?>
                      </div>
                    </div>
                    <div class="event-date">
                      <small class="fs-12 hint-text"><?php echo $activity['day_elapsed']; ?> <?php echo $activity['time']; ?> (<?php echo $activity['time_elapsed']; ?>)</small>
                    </div>
                  </div>
                  <!-- timeline-content -->
                </div>
                <!-- timeline-block -->
                        <?php } ?>




                    <?php } ?>
            <?php } else { ?>
                <p><?php echo lang('text_empty'); ?></p>
            <?php } ?>


              </section>
            </div>


<div class="row">
    <div class="col-md-12">

        <div class="panel">
            <div class="pagination-bar clearfix">
                <div class="links"><?php echo $pagination['links']; ?></div>
                <div class="info"><?php echo $pagination['info']; ?></div>
            </div>
        </div>
    </div>
</div>

</div>
<?php echo get_footer(); ?>
