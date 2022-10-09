<?php $__env->startSection('content'); ?>

<?php echo $page->getBreadcrumb(); ?>

<section class="full-page-wrapper pt-0">
      
        <?php echo $__env->make('components.dynamic-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <?php echo $__env->make('partials.page-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kaped.app/packages/ui/resources/views/pages/full.blade.php ENDPATH**/ ?>