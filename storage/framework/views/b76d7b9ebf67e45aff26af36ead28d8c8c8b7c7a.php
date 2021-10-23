

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
          <h3>Messages</h3>
            <?php if(count($messages)>0): ?>
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul class="list-group">
              <li class="list-group-item">Name: <?php echo e($message->name); ?></li>
              <li class="list-group-item">Email: <?php echo e($message->email); ?></li>
              <li class="list-group-item">Message: <?php echo e($message->message); ?></li>
            </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-bootstrap\resources\views/messages.blade.php ENDPATH**/ ?>