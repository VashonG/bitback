<section class="icon-text-card categories-block">
    <div class="container">
        <div class="heading mb-4">
            <?php echo __pb($title); ?>

        </div>
        <ul class="style-4">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e($cat->getUrl()); ?>">
                        <div class="cat-icon-wrapper">
                            <div class="cat-icon-image-wrapper">
                                <img class="cat-icon lozad" data-src="<?php echo e($cat->icon); ?>" src="<?php echo e(pcb_lazy_image()); ?>"
                                    alt="<?php echo e($cat->name); ?>" />
                            </div>

                            <p class="cat-name"><?php echo e($cat->name); ?></p>
                            <p class="font-12 text-medium-grey">
                                <?php echo e($cat->store_count); ?> <?php echo e(__('public.search_page.stores')); ?>

                                <i class="fas fa-arrow-right ms-2"></i>
                            </p>
                        </div>
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
    </div>
</section>
<?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/categories-block/icon-text-card.blade.php ENDPATH**/ ?>