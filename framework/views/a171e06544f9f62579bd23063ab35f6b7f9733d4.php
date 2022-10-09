<section class="lb-refer-works pt-0">
    <div class="container">
        <h2 class="refer-works-title heading"><?php echo e(__pb($title)); ?></h2>
        <p class="text-dark-grey text-center"><?php echo e(__pb($description)); ?></p>
        <ul class="ps-0">
            <?php if(isset($blocks)): ?>
            <?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div class="ref-work-card">
                    <div class="img-cont">
                        <?php if(isset($block['image'])): ?>
                        <img  src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e($block['image']); ?>" alt="<?php echo e(__pb($block['title'])); ?>" class="lozad lazyload img-fluid">
                    <?php endif; ?>


                    </div>
                    <div class="title"><?php echo e(__pb($block['title'])); ?></div>
                    <div><?php echo e(__pb($block['content'])); ?></div>
                </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
    </div>
</section>
<?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/section/2.blade.php ENDPATH**/ ?>