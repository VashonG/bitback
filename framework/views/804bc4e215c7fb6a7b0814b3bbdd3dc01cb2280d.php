<li class="cashback-store-card store-container">
    
    <i data-store_id=<?php echo e($store->id); ?> class="fav-store-icon far fa-heart d-none d-auth"></i>
    <a href="<?php echo e($store->getUrl()); ?>">
        <div>
            <span class="st-card-offer-count">
                <?php echo e(__('public.store.offers_count', ['COUNT' => $store->offers_count])); ?>

            </span>
            <div class="store-image">
                <img class="lozad img-fluid" src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e($store->logo); ?>"
                    alt="<?php echo e($store->name); ?>">
            </div>

            <?php if($store->cashback_enabled): ?>
                <div class="store-was-amount"> <?php echo e($store->getWasCashback()); ?></div>
            <?php else: ?>
                <div class="store-was-amount"> &nbsp; </div>
            <?php endif; ?>
            
            <div class="store-cashback-info align-items-start">
                <?php if($store->cashback_enabled): ?>
                    
                    <div class="mb-3">
                        <span class="rate-type me-2">
                            <?php echo e($store->rate_type); ?>

                        </span>
                        <span class="cashback-amount">
                            <?php if($store->amount_type == 'percent'): ?>
                                <?php echo e($store->cashback_amount); ?>%
                            <?php elseif($store->amount_type == 'fixed'): ?>
                                <?php echo e(pcb_currency($store->cashback_amount)); ?>

                            <?php endif; ?>
                        </span>
                    </div>
                    <div class="cashback-type">
                        <?php echo e($store->cashback_type); ?>

                    </div>
                <?php endif; ?>

                </span>
            </div>
            <div class="store-link">
                <a href="<?php echo e($store->getOutLink()); ?>" target="_blank">
                    <?php echo e(__('public.store.go_to_store')); ?>

                    <i class="fas fa-arrow-right text-primary ms-2"></i>
                </a>
            </div>
        </div>
    </a>
    
    
    
</li>
<?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/store/card/1.blade.php ENDPATH**/ ?>