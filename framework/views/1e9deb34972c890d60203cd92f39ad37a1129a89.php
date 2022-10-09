<section class="hero-with-button-section">
    <div class="container">
        <div class="banner-cont" style="background-image:url(<?php echo e($image); ?>);">
            <div class="banner-info">
                <h1 class="banner-title heading"><?php echo __pb($title); ?></h1>
                <p class="banner-desc"><?php echo __pb($description); ?></p>

                <div class="banner-button-wrapper">
                    <?php $__currentLoopData = $buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $btn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a target="<?php echo e(strpos('pad' . $btn['button_url'], 'http') ? '_blank' : '_self'); ?>"
                            href="<?php echo e(strlen($btn['button_url']) > 2 ? (strpos('pad' . $btn['button_url'], 'http') ? $btn['button_url'] : route('home') . $btn['button_url']) : '#'); ?>"
                            class="<?php echo e($btn['button_class']); ?>">
                            <?php echo e(__pb($btn['button_name'])); ?> 
                        </a>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/hero-button/2.blade.php ENDPATH**/ ?>