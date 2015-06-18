<div id="node-<?php print $node->nid; ?>" class="portfolio-detail <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="content row"<?php print $content_attributes; ?>>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 portfolio-content">
      <?php print render($content['field_portfolio_media']); ?>
      <?php print render($content['body']); ?>
    </div>

    <!-- <div class="subprogram">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
   <?php print render($content['field_sub_program_1']); ?>

    </div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <?php print render($content['field_sub_program_2']); ?>
    </div>
      </div> -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <?php print render($content['field_additional_info']); ?>
    </div>


<!--   <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?> -->

</div>
