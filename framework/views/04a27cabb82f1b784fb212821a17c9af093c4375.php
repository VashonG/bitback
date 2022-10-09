<section class="lb-refer-banner-section">
    <div class="container">
        <div class="banner-cont" style="background-image:url(<?php echo e($image); ?>);">
            <div class="banner-info">
                <h1 class="banner-title heading"><?php echo e(__pb($title)); ?></h1>
                <p class="banner-desc"><?php echo e(__pb($description)); ?></p>
                <?php if( strlen($button_url) > 0  ): ?>
                <a href="<?php echo e($button_url); ?>" class="banner-btn btn"><?php echo e(__pb($button_name)); ?> <i class="fas fa-chevron-right ms-3"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/hero/2.blade.php ENDPATH**/ ?>