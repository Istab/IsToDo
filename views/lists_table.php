<table>
  <?php foreach($lists as $list) : ?>
    <tr>
      <td>
        <a class="list-title" href="?listID=<?php echo $list->getID(); ?>"><?php echo $list->getTitle(); ?></a>
      </td>
      <td>
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
