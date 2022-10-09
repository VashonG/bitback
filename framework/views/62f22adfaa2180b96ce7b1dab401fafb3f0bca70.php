<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="referrer" content="same-origin">
    
	
	
    <?php echo SEO::generate(); ?>


    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('headStack'); ?>

</head>

<body class="<?php if(auth()->guard()->check()): ?> is_user <?php endif; ?>">
    <?php echo config('pcb.dev.code_body'); ?>


     <?php if (isset($component)) { $__componentOriginalda0ecbb2e624de16624588f22092181ec4ac564d = $component; } ?>
<?php $component = $__env->getContainer()->make(EnactOn\ProCashBee\UI\View\Components\Header::class, []); ?>
<?php $component->withName('pcb-ui-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalda0ecbb2e624de16624588f22092181ec4ac564d)): ?>
<?php $component = $__componentOriginalda0ecbb2e624de16624588f22092181ec4ac564d; ?>
<?php unset($__componentOriginalda0ecbb2e624de16624588f22092181ec4ac564d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

    <main>

        <?php echo $__env->yieldContent('content'); ?>
    </main>

     <?php if (isset($component)) { $__componentOriginalbb711dfae484f4ff4ca580aa73a297a595252d0c = $component; } ?>
<?php $component = $__env->getContainer()->make(EnactOn\ProCashBee\UI\View\Components\Footer::class, []); ?>
<?php $component->withName('pcb-ui-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalbb711dfae484f4ff4ca580aa73a297a595252d0c)): ?>
<?php $component = $__componentOriginalbb711dfae484f4ff4ca580aa73a297a595252d0c; ?>
<?php unset($__componentOriginalbb711dfae484f4ff4ca580aa73a297a595252d0c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

    
    <?php echo $__env->make('layouts.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    

    <?php echo $__env->make('layouts.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('footStack'); ?>

    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html>
<?php /**PATH /var/www/kaped.app/packages/ui/resources/views/layouts/app.blade.php ENDPATH**/ ?>