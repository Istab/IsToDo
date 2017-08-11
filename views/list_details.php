<?php if ($lists != NULL) { ?> 
  <h2>
    <?php if ($rename_list) { ?>
      <form action="." method="post" >
        <input type="hidden" name="action" value="rename_list">
        <input type="hidden" name="listID" value="<?php echo $current_list->getID(); ?>">
        <input class="form-input" type="text" name="title" placeholder="<?php echo $current_list->getTitle(); ?>">
        <input class="black button" type="submit" value="✎">
      </form>
    <?php } else { ?>
      <form action="." method="get" >
        <input type="hidden" name="action" value="index_lists">
        <input type="hidden" name="rename_list" value="true">
        <input type="hidden" name="listID" value="<?php echo $current_list->getID(); ?>">
        <input class="list-title" type="submit" value="✎<?php echo $current_list->getTitle(); ?>">
      </form>
    <?php } ?>
  </h2>
  <?php if ($items == NULL){ ?>
    <h3 class="red-text"><?php echo 'The list is empty' ?></h3>
  <?php } ?>
  <table>
    <?php foreach($items as $item) : ?>
      <td><?php echo $item->getItemTitle(); ?></td>
      <td>
      </td>
    </tr>
    <?php endforeach; ?>
    <tfoot>
      <tr>
        <td></td>
        <td>
          <form action="." method="post" >
            <input type="hidden" name="action" value="add_item" />
            <input type="hidden" name="status" value="Not_started" />
            <input type="hidden" name="listID" value="<?php echo $current_list->getID(); ?>" />
            <input class="form-input" type="text" name="item_title" placeholder="Add a new item">
        </td>
        <td>
            <input class="green button" type="submit" value="┼">
          </form>
        </td>
      </tr>
    </tfoot>
  </table>
<?php } ?>
