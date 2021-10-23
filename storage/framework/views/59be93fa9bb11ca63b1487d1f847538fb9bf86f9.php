


<?php $__env->startSection('content'); ?>
<h1>Contatc Us</h1>
<?php echo Form::open(['url' => 'contact/submit']); ?>


    <div class="form-group">
      <?php echo e(Form::label('name', 'Name')); ?>

      <?php echo e(Form::text('name','' , ['class' => 'form-control', 'placeholder' => 'Enter your name'] )); ?>

    </div>
    <div class="form-group">
      <?php echo e(Form::label('email', 'E-Mail')); ?>

      <?php echo e(Form::text('email','' , ['class' => 'form-control', 'placeholder' =>'Enter your email'])); ?>

    </div>
    <div class="form-group">
      <?php echo e(Form::label('message', 'Message')); ?>

      <?php echo e(Form::textarea('message', '' , ['class' => 'form-control', 'placeholder' => 'Type your message'])); ?>

    </div>
    <div>
      <?php echo e(Form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

    </div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-bootstrap\resources\views/contact.blade.php ENDPATH**/ ?>