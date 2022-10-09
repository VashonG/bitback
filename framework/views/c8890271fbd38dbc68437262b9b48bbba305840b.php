<?php $__env->startSection('content'); ?>
<?php echo $category->getBreadcrumb(); ?>


<div class="lb-coupon-categories">
    <section class="lb-cpn-ctg-section pt-0">

            <div class="container">
            <div class="store-title">
                <div class="side-border"></div>
                <h1 class="heading"> <?php echo e($category->hTags['h1']); ?>  </h1>
                <div class="side-border"></div>
            </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="page-content short-content text-center">
                            <?php echo $category->description; ?>

                        </div>
                        <?php if(strlen($category->description)>50): ?>
                        <div class="text-end">
                            <a class="show-more-btn"><?php echo e(__('common.see_more')); ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

    </section>

    
    <section class="lb-browse-coupons pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <h2 class="heading text-center"> <?php echo e($category->hTags['h2']); ?> </h2>
                </div>
            </div>
            <div class="row">


                <div class="col-md-12">
                    
                    <div class="coupon-cat-menu">
                        <!-- <div class="sm-heading lb-accordion-title mb-2">Coupon Categories</div> -->

                        <!-- <?php echo $__env->make('components.category-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

                        <coupon-filter></coupon-filter>

                    </div>
                </div>

                <div class="col-md-12">
                    <coupon-list-view></coupon-list-view>
                </div>
            </div>
        </div>
    </section>

</div>
<?php $__env->stopSection(); ?>



<?php $__env->startPush('footStack'); ?>
<script>
    window.filterData = <?php echo json_encode($filter, 15, 512) ?>;

    function get_blade_data() {
        return(
           {style_type:1, cat_ids:[<?php echo e($category->id); ?>], store_ids:[],is_store_page:false, per_page: <?php echo e(config('pcb.listing.coupons_per_category')); ?>}
        )
    }

    window.couponData = <?php echo json_encode($coupons, 15, 512) ?>;
</script>


<script src="<?php echo e(asset('ui/js/filter.js')); ?>?ver=<?php echo e(config('pcb.dev.asset_version')); ?>"></script>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kaped.app/packages/ui/resources/views/pages/coupon/category/single/index.blade.php ENDPATH**/ ?>