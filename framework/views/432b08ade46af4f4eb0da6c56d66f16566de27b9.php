
<section class="stores-section">
    <div class="container">
        <ul class="lb-top-store list-unstyled">
            <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <?php if (isset($component)) { $__componentOriginalc8664afa47cfe9985480ecf8823c5f5162e26aaa = $component; } ?>
<?php $component = $__env->getContainer()->make(EnactOn\ProCashBee\UI\View\Components\StoreCard::class, ['store' => $store,'style' => $style]); ?>
<?php $component->withName('pcb-ui-store-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc8664afa47cfe9985480ecf8823c5f5162e26aaa)): ?>
<?php $component = $__componentOriginalc8664afa47cfe9985480ecf8823c5f5162e26aaa; ?>
<?php unset($__componentOriginalc8664afa47cfe9985480ecf8823c5f5162e26aaa); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        
    </div>
</section>
<?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/store/grid/1.blade.php ENDPATH**/ ?>