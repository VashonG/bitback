<div id="main-carousel" class="main-slider carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <?php for($iloop = 0 ; $iloop <count($slides) ; $iloop++): ?> <li data-bs-target="#main-carousel"
            data-bs-slide-to="<?php echo e($iloop); ?>" class="<?php echo e($iloop === 0 ? 'active' : ''); ?>">
            </li>
            <?php endfor; ?>
    </ol>
    <div class="carousel-inner">
        <?php if($slides): ?>
        <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="carousel-item <?php echo e($loop->index === 0 ? 'active' : ''); ?>">
            <a href="<?php echo e($item['slider_link']); ?>"  target="<?php echo e($item['target']); ?>">        
                <picture class="lozad">
                    <source media="(min-width: 768.98px)" srcset="<?php echo e(__pb($item['image_url'])); ?>">
                    <source media="(max-width: 767.98px)" srcset="<?php echo e(__pb($item['mobile_image_url'])); ?>">
                    <img class="img-fluid carousel-img" src="<?php echo e(pcb_lazy_image()); ?>" alt="<?php echo e($item['title']??''); ?>" height="<?php echo e($height); ?>" style="width:auto;" >
                </picture>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
    <a class="carousel-control-prev" href="#main-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#main-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</div>
<?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/slider/1.blade.php ENDPATH**/ ?>