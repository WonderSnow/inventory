<?php if($errors->any()): ?>
<p class="text-center font-semibold text-danger my-3">
    <?php if($errors->has('email')): ?>
        <?php echo e($errors->first('email')); ?>

    <?php else: ?>
        <?php echo e($errors->first('password')); ?>

    <?php endif; ?>
    </p>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\inventory\repos\src/../resources/views/auth/partials/errors.blade.php ENDPATH**/ ?>