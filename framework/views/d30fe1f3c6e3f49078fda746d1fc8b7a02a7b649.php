<section class="two-col-hiw-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 order-2 order-lg-1 ms-auto">
                <div>
                    <p class="text-primary fw-medium"><?php echo __pb($description); ?></p>
                </div>
                <div class="hiw-title mb-4 mb-md-5">
                    <h2 class="heading fw-medium"><?php echo e(__pb($title)); ?></h2>
                </div>

                <div class="hiw-block-main">
                    <?php if(isset($blocks)): ?>
                        <?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="hiw-block">
                                <div class="hiw-block-info">
                                    <div class="hiw-block-number">
                                        <span class="sr-number"> <?php echo e(sprintf('%02d', $loop->iteration)); ?> </span>
                                        <div class="sr-dash"></div>
                                    </div>

                                    <div>
                                        <div class="hiw-block-title">
                                            <?php echo e(__pb($block['title'])); ?>

                                        </div>
                                        <div class="hiw-desc"><?php echo e(__pb($block['content'])); ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 mb-5 mb-lg-0 text-center me-auto">
                <?php if(isset($blocks)): ?>
                    <img src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e($blocks[0]['image']); ?>"
                        alt="<?php echo e(__pb($blocks[0]['title'])); ?>" class="lozad lazyload img-fluid">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/section/2-col-hiw-section.blade.php ENDPATH**/ ?>