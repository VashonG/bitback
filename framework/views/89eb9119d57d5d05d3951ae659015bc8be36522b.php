<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <?php echo SEO::generate(); ?>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="referrer" content="same-origin">
    
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('headStack'); ?>

	<meta name="robots" content="noindex, follow">
	
</head>

<body>
    

    <main class="pb-4">
        <div class="headless-header">
            <div class="container">
                <div class="text-center">
                    <a class="site-logo" href="<?php echo e(route('home')); ?>">
                        <img class="img-fluid" src="<?php echo e(config('pcb.web.logo')); ?>" alt="Logo">
                    </a>
                </div>
            </div>
        </div>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    
    <?php echo $__env->make('layouts.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    

    <div id="adBlockWrapper"></div>
    <?php echo $__env->make('layouts.foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('footStack'); ?>

    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html><?php /**PATH /var/www/kaped.app/packages/ui/resources/views/layouts/headless.blade.php ENDPATH**/ ?>