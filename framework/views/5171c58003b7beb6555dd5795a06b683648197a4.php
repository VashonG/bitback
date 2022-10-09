<div class="lb-accordion lbTransition">
    <div class="accordion" id="lbAccordion">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="card">
            <div class="card-header" id="cat<?php echo e($category->id); ?>">
                <h5 class="mb-0 d-flex align-items-center justify-content-between">
                <a href="<?php echo e($category->getUrl()); ?>" class="w-100">
                   <?php echo e($category->name); ?>  
                </a>
                <span class="rotateBtn"><i class="fa fa-chevron-down" role="button" data-bs-toggle="collapse" data-bs-target="#catItem<?php echo e($category->id); ?>" aria-expanded="true" aria-controls="catItem<?php echo e($category->id); ?>"></i>
                   </span>
                </h5>
            </div>
            <div id="catItem<?php echo e($category->id); ?>" class="collapse <?php if($loop->first): ?> show <?php endif; ?> " aria-labelledby="cat<?php echo e($category->id); ?>" data-bs-parent="#lbAccordion">
                <div class="card-body">
                    <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><a href="<?php echo e($child->getUrl()); ?>"><?php echo e($child->name); ?></a></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /var/www/kaped.app/packages/ui/resources/views/components/category-menu.blade.php ENDPATH**/ ?>