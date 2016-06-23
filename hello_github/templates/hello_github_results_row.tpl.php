<?php

/**
* @file
* Template for Hello Github render one row of retrieved data.
*
* Available variables:
* - $repo_name: name of the repository.
* - $owner: owner of the repository.
* - $status: state of the repository.
*/
?>
<tr>
  <td>
    <h3><?php print $repo_name; ?></h3>
    <ul>
      <?php if (isset($owner)): ?>
      <li>
        <?php print t('Owner: ') . $owner; ?>
      </li>
      <?php endif; ?>
      <?php if (isset($status)): ?>
      <li>
        <?php print $status; ?>
      </li>
      <?php endif; ?>
    </ul>
  </td>
</tr>
