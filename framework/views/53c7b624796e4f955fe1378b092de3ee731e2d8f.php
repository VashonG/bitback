<div class="container">
    <section class="promo-solid-bg">
        <div class="lb-hiw-mobile-app">
            <div class="row">
                <div class="col-md-6 lb-app-info d-flex align-items-center">
                <div class="lb-app-info-wrapper">
                    <h3 class="heading"><?php echo __pb($title); ?></h3>
                    <p class="app-desc"><?php echo e(__pb($description)); ?></p>
                    <div class="install-btn-wrapper">
                        <?php if(isset($buttons) && is_array($buttons)): ?>
                            <?php $__currentLoopData = $buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(strlen($item['link']) > 2): ?>
                            <a class="my-2 d-<?php echo e($item['platform']); ?> d-none" href="<?php echo e($item['link']); ?>" target="_blank">
                                <div class="btn-install">
                                    <div class="app-icon"><i class="fab fa-<?php echo e($item['platform']); ?>"></i></div>
                                    <div class="app-info">
                                        <p><?php echo e(__('public.hiw_app.its_free')); ?></p>
                                        <p><?php echo e(__('public.hiw_app.add_to',['platform'=>$item['platform_label']])); ?></p>
                                    </div>
                                </div>
                            </a>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                </div>

                <div class="col-md-6 promo-img-col">
                    <div class="lb-mob-image">
                        <img class="lozad img-fluid" src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e($app_img); ?>" alt="<?php echo e($app_img); ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
<?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/promote/3.blade.php ENDPATH**/ ?>