<table class="table">
  <thead>
    <tr>
      <th scope="col">Datum</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Betreff</th>
      <th scope="col">Aktionen</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($messages AS $message): ?>
      <tr>
        <td><?php echo e(date("d.m.Y H:i:s", $message["timestamp"])); ?></td>
        <td>
          <?php if(empty($message["name"])): ?>
            <em>Kein Name angegeben</em>
          <?php else: ?>
            <?php echo e($message["name"]); ?>
          <?php endif; ?>
        </td>
        <td><?php echo e($message["email"]); ?></td>
        <td><?php echo e($message["subject"]); ?></td>
        <td>
          <a href="contact-view.php?id=<?php echo e($message["id"]); ?>">Anzeigen</a>
          <a href="contact-edit.php?id=<?php echo e($message["id"]); ?>">Bearbeiten</a>
          <form action="contact-delete.php" method="post" class="contact-delete-form">
            <input type="hidden" name="id" value="<?php echo e($message["id"]); ?>" />
            <button type="submit" class="btn btn-link">Löschen</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?> 
  </tbody>
</table>
