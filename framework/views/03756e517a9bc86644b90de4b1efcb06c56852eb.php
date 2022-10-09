<!-- Required for Masonry Card layout -->
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

<?php $__env->startSection('content'); ?>

<section class="all-store-categories pt-0">

    <?php echo $page->getBreadcrumb(); ?>


    <div class="container">
        <div class="all-categories-block">
            <div class="store-title">
                <h1 class="heading"> <?php echo e($page->h1); ?> </h1>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="page-content short-content text-center">
                            <?php echo $page->content; ?>

                        </div>
                        <div class="text-end">
                            <a class="show-more-btn"><?php echo e(__('common.see_more')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-2">
    <div class="container">
    <div class="row" data-masonry='{"percentPosition": true }'>
        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
            <div class="lb-card">
                <div class="lb-card-body">
                <a href="<?php echo e($cat->getUrl()); ?>" class="text-dark fw-medium d-block mb-2"> <?php echo e($cat->name); ?></a>

                <ul class="list-unstyled">
                    <?php $__currentLoopData = $cat->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href="<?php echo e($child->getUrl()); ?>"> <?php echo e($child->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>

</section>
<?php echo $__env->make('partials.page-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kaped.app/packages/ui/resources/views/pages/store/category/all/index.blade.php ENDPATH**/ ?>