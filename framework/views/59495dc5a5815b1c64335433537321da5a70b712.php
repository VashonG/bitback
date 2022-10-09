<section class="trending-cashback-stores-section">
    <div class="container">
        <div class="lb-nav-tabs">
            <div class="title-with-tabs d-md-flex d-sm-block border-bottom mb-3">
                <div class="lb-tab-title">
                    <h2 class="heading "><?php echo e(__pb($title)); ?></h2>
                    <p class="text-medium-grey"><?php echo e(__pb($description)); ?></p>
                </div>
                
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link <?php if($loop->first): ?> active <?php endif; ?> " id="<?php echo e($category->id); ?>-tab" data-bs-toggle="tab" href="#topStoreTab-<?php echo e($blockId); ?>-<?php echo e($category->id ? '-' . $category->id : ''); ?>" role="tab">
                            <?php echo e($category->name); ?>

                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="tab-pane fade  <?php if($loop->first): ?> show active <?php endif; ?> " id="topStoreTab-<?php echo e($blockId); ?>-<?php echo e($category->id ? '-' . $category->id : ''); ?>" role="tabpanel">
                    <div class="hp-top-stores">
                         <?php if (isset($component)) { $__componentOriginalf6ae3b19a48c05ad3d7455ffe184291f35572796 = $component; } ?>
<?php $component = $__env->getContainer()->make(EnactOn\ProCashBee\UI\View\Components\StoreGrid::class, ['stores' => $category->stores,'style' => $style]); ?>
<?php $component->withName('pcb-ui-store-grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalf6ae3b19a48c05ad3d7455ffe184291f35572796)): ?>
<?php $component = $__componentOriginalf6ae3b19a48c05ad3d7455ffe184291f35572796; ?>
<?php unset($__componentOriginalf6ae3b19a48c05ad3d7455ffe184291f35572796); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                    </div>
                    <?php if(strlen($category->slug) > 1): ?>
                    <a href="<?php echo e($category->getUrl()); ?>">
                        <div class="view-all-btn"><span class="me-2"><?php echo e(__('common.view_more_store', ['CATEGORY' => $category->name])); ?><i class="fas fa-long-arrow-alt-right ms-2"></i></span></div>
                    </a>
					<?php else: ?> 
					
                    <div class="text-center">
                        <a href="<?php echo e(route('all_stores')); ?>" class="btn">
                            <?php echo e(__('common.show_all')); ?>

                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>	
                    </div>
                    <?php endif; ?>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
        </div>

    </div>
</section><?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/store/top-stores/1.blade.php ENDPATH**/ ?>