
<?php $__currentLoopData = $_GET; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hidden_key => $hidden_val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <input type="hidden" name="<?php echo e($hidden_key); ?>" value="<?php echo e($hidden_val); ?>">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/kaped.app/packages/ui/resources/views/partials/get_inputs.blade.php ENDPATH**/ ?>