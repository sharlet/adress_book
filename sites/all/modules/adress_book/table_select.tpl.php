<?php
/**
 * Theme tamplate for address book table
 */
?>
<div class="adress_book">
  <table style="border:1px;">
    <?php if (!empty($header)) : ?>
      <thead>
      <tr>
        <?php foreach ($header as $field => $label): ?>
          <th>
            <?php print $label; ?>
          </th>
        <?php endforeach; ?>
      </tr>
      </thead>
    <?php endif; ?>
      <tbody>
      <?php foreach ($rows as $row_count => $row): ?>
      <tr>
        <?php foreach ($row as $field => $content): ?>
          <td>
            <?php print $content; ?>
          </td>
        <?php endforeach; ?>
      </tr>
        <?php endforeach; ?>
      </tbody>
  </table>
</div>
