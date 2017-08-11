<?php if ($item->isDone()) { ?>
<!-- list item is complet => highlight in green & clicking on it will mark it as incomplete-->
<tr class='done'>
  <td>
    <form action="." method="post" >
      <input type="hidden" name="action" value="toggle_item" />
      <input type="hidden" name="itemID" value="<?php echo $item->getItemID(); ?>" />
      <input type="hidden" name="listID" value="<?php echo $current_list->getID(); ?>" />
      <input type="hidden" name="status" value="Not_started" />
      <input class="list-title" type="submit" value="✔" />
    </form>
  </td>
<?php } else { ?>
<!-- list item is in not complete => highlight in red & clicking on it will mark it as complete-->
<tr class='not-done'>
  <td>
    <form action="." method="post" >
      <input type="hidden" name="action" value="toggle_item" />
      <input type="hidden" name="itemID" value="<?php echo $item->getItemID(); ?>" />
      <input type="hidden" name="listID" value="<?php echo $current_list->getID(); ?>" />
      <input type="hidden" name="status" value="complete" />
      <input class="list-title" type="submit" value="✘" />
    </form>
  </td>
<?php } ?>
  <td>
  <?php if ($rename_itemID==$item->getItemID()) { ?>
  <!-- User requested to rename an item, display a form -->
    <form action="." method="post" >
      <input type="hidden" name="action" value="rename_item">
      <input type="hidden" name="listID" value="<?php echo $current_list->getID(); ?>">
      <input type="hidden" name="itemID" value="<?php echo $item->getItemID(); ?>">
      <input class="form-input" type="text" name="title" placeholder="<?php echo $item->getItemTitle(); ?>">
    </form>
  <?php } else { ?>
  <!-- User didni't request to rename an item, Only display the item name. Clicking the name will show a form to rename the item -->
    <form action="." method="get" >
      <input type="hidden" name="action" value="index_lists">
      <input type="hidden" name="rename_itemID" value="<?php echo $item->getItemID(); ?>">
      <input type="hidden" name="listID" value="<?php echo $current_list->getID(); ?>">
      <input class="list-title" type="submit" value="✎<?php echo $item->getItemTitle(); ?>">
    </form>
  <?php } ?>
  </td>
  <td>
    <form action="." method="post" >
      <input type="hidden" name="action" value="delete_item">
      <input type="hidden" name="itemID" value="<?php echo $item->getItemID(); ?>">
      <input type="hidden" name="listID" value="<?php echo $current_list->getID(); ?>">
      <input class="red button" type="submit" value="─">
    </form>
  </td>
</tr>

