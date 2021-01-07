<dl>
  <dt>Id:</dt>
  <dd><?php echo e($message["id"]); ?></dd>

  <dt>Name:</dt>
  <dd><?php echo e($message["name"]); ?></dd>

  <dt>Email:</dt>
  <dd><?php echo e($message["email"]); ?></dd>

  <dt>Betreff:</dt>
  <dd><?php echo e($message["subject"]); ?></dd>

  <dt>Nachricht:</dt>
  <dd><?php echo nl2br(e($message["message"])); ?></dd>
</dl>