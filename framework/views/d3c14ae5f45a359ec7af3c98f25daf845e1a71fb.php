<?php $__env->startSection('content'); ?>

<style>
    .social-callback  .signup-info-box {display: none}
</style>

<div class="auth-wrapper <?php if($isSocialCallback): ?> social-callback <?php endif; ?>">
    <?php echo $__env->make('components.dynamic-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.headless', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kaped.app/packages/ui/resources/views/pages/auth.blade.php ENDPATH**/ ?>