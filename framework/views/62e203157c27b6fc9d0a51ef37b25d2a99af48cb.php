
        <li class="store-coupon-card" data-name="<?php echo e($store->name); ?>" data-alpha="<?php echo e($store->alpha); ?>"  data-iscb="<?php echo e($store->cashback_enabled); ?>" data-pop="<?php echo e($store->clicks); ?>" data-cashback="<?php echo e($store->cashback_sort); ?>">
            <div class="store-cpn-info">
            <div class="store-name"><a href="<?php echo e(route('store.single',['slug'=> $store->slug ?? '/' ])); ?>"><?php echo e($store->name); ?></a></div>
                <a href="<?php echo e(route('store.single',['slug'=>$store->slug ?? '/'])); ?>" class="now-cb"><img class="cb-icon lozad" src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e(config('pcb.cashback.icon')); ?>" alt="cb-icon"> 
                <?php echo e($store->cashback_string); ?>

            </a>
            </div>
            <div class="store-avail-cpn">
                <div class="total-cpn"><?php echo e($store->offers_count); ?> <?php echo e(__('public.store.coupon_count')); ?></div>
            <a target="_blank" href="<?php echo e(route('out',['type'=>'store','type_id'=> $store->id ])); ?>" class="store-cpn-btn btn lbTransition"><?php echo e(__('public.store.shop_now_btn')); ?></a>
            </div>
        </li>
<?php /**PATH /var/www/kaped.app/packages/ui/resources/views/components/store/list/native/1.blade.php ENDPATH**/ ?>