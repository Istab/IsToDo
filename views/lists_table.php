<table>
  <?php foreach($lists as $list) : ?>
    <tr>
      <td>
        <a class="list-title" href="?listID=<?php echo $list->getID(); ?>"><?php echo $list->getTitle(); ?></a>
      </td>
      <td>
        <form action="." method="post" >
          <input type="hidden" name="action" value="delete_list">
          <input type="hidden" name="listID" value="<?php echo $list->getID(); ?>">
          <input class="red button" type="submit" value="─">
        </form>
      </td>
    </tr>
  <?php endforeach; ?>
  <tfoot>
    <tr>
      <td>
        <form action="." method="post" >
          <input type="hidden" name="action" value="add_list" />
          <input class="form-input" type="text" name="title" placeholder="Create a new list">
      </td>
      <td>
          <input class="green button" type="submit" value="┼">
        </form>
      </td>
    </tr>
  </tfoot>
</table>
