<?php foreach ($widgets as $widget) { ?>

<div class="col-md-4">
    <div class="widget clearfix">
      <h4 class="widget-title"><?= $widget->title ?></h4>
          <p style="margin-top: 12px;"> <?= $widget->get('result') ?>  </p>
    </div>
</div>
<?php } ?>
