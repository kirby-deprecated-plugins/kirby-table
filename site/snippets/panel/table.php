<?php

  if (!isset($kirby)) {
    $kirby = kirby();
  }

  if (!isset($site)) {
    $site  = $kirby->site();
  }

?>

  <div style="color: #999;font-size: 75%;margin: 0 0 .5em 0;">
    colspan : <?php echo $values->cell_span; ?> (out of <?php echo $values->cell_total; ?>)
  </div>

  <div style="height: 5em;overflow: hidden;border: 1px solid #ddd;background: #ececec;padding: .25em;">
    <?php echo kirbytext(substr($values->cell_content, 0, 200)); ?>
  </div>

<?php
  $relative = ($values->cell_span / $values->cell_total) * 100;
  $relative -= 2;
  $rand_id = mt_rand();
?>

<script id="cell_<?php echo $rand_id; ?>">$('#cell_<?php echo $rand_id; ?>').parent().parent().css({margin:'1%',float:'left',width:'<?php echo $relative; ?>%'});</script>