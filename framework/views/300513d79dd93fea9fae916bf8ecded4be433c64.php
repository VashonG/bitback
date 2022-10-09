<div <?php echo e(isset($referEarnBlock) && $referEarnBlock ? 'class=' : 'class=store-hiw-collapse'); ?>>

<section class="lb-ref-friend-section pt-0">
    <div class="container">
        <h2 class="heading"><?php echo e(__pb($title)); ?></h2>
        <p class="text-dark-grey text-center"><?php echo e(__pb($description)); ?></p>
        <ul>
            <?php if(isset($blocks)): ?>
            <?php $__currentLoopData = $blocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div class="ref-friend-card">
                    <div class="top-desc">
                        <?php if(isset($block['image'])): ?>
                        <img  src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e($block['image']); ?>" alt="<?php echo e(__pb($block['title'])); ?>" class="lozad lazyload img-fluid">
                    <?php endif; ?>

                        <div class="item-title"><?php echo e(__pb($block['title'])); ?></div>
                    </div>
                    <div class="bottom-desc"><p><?php echo e(__pb($block['content'])); ?></p></div>
                </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
    </div>
</section>
</div>
<?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/section/3.blade.php ENDPATH**/ ?>