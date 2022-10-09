<?php $__env->startSection('content'); ?>
<div class="lb-all-stores">
    <section class="lb-all-stores-section pt-0">
        <div class="container">

            <?php echo $page->getBreadcrumb(); ?>


            <div class="store-title">
                <div class="side-border"></div>
                <h1 class="heading"> <?php echo e($page->h1); ?> </h1>
                <div class="side-border"></div>
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
    </section>

    <section class="lb-browse-stores pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    
                    <div class="stores-cat-menu">
                        <div class="sm-heading lb-accordion-title mb-3"><?php echo e(__('public.store.store_categories')); ?></div>
                        <?php echo $__env->make('pcb-ui::components.category-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div class="col-md-9">

                    <?php echo $__env->make('partials.store-list-filter-native', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                </div>
                <?php echo $__env->make('partials.page-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </section>


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kaped.app/packages/ui/resources/views/pages/store/all/index.blade.php ENDPATH**/ ?>