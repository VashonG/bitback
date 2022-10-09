<section class="lb-join-ref-prog  d-guest d-none" <?php if($image): ?> style="background-image:url(<?php echo e($image); ?>);"  <?php endif; ?>>
    <div class="container">
        <div class="banner-info">
            
            <div class="banner-title heading"><?php echo __pb($title); ?></div>
            <a href="" class="banner-btn btn" data-bs-toggle="modal"
                data-bs-target="#joinusModal"><?php echo e(__('common.cta.join_now')); ?></a>
            <p class="banner-desc">
                <?php echo e(__('common.cta.already_register')); ?>

                <a href="" class="text-orange ms-2"
                    data-bs-toggle="modal" data-bs-target="#signinModal"><?php echo e(__('common.cta.login')); ?></a>
                </p>
        </div>
    </div>
</section>
<?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/cta/2.blade.php ENDPATH**/ ?>