<?php $cells = yaml($page->table());if (count($cells)): ?>

  <table style="border: 1px solid #ccc;border-spacing: .5em;border-collapse: separate;background: #f3f3f3;width: 100%;">

<?php

  $cell_spanned = 0;
  $cell_ini = 0;

  foreach($cells as $cell):

    if($cell_spanned < 1) {
      echo '<tr>';
    }

    $cell_ini++;

    if($cell_ini == 1) {
      $cell_total = $cell['cell_total'];
    }

    $cell_spanned += $cell['cell_span'];

    echo '<td style="vertical-align: top;border: 1px solid #ccc;padding: .5em;background: #fff;width: ' . ($cell['cell_span'] / $cell_total) * 100 . '%" colspan="' . $cell['cell_span'] . '">' . kirbytext($cell['cell_content']) . '</td>';

    if($cell_spanned == $cell_total) {
      echo '</tr>';
      $cell_spanned = 0;
    }

  endforeach;

?>

  </table>

<?php endif; ?>