<?php $__env->startSection('content'); ?>

        <section class="out-after pt-0 d-none" style="overflow:inherit;" id="withOutAdsBlocked" >
            <div class="container">
            <!-- <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
            <img src="<?php echo e(config('pcb.logo')); ?>" class="img-fluid" alt="<?php echo e(config('pcb.app_name')); ?>">
            </a> -->
            <?php if(! $store->cashback_enabled || Auth::check() ): ?>
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-9 col-md-6 col-xl-5 col-xxl-4">
                    <div class="out-after-cont">
                        <div class="out-info">
                            <div class="sm-heading">

                                    <?php if($store->cashback_enabled): ?>

                                    <p class="now-cb mb-2">

                                        <?php if($object_type=='deal' && $clicked_item->cashback > 0 ): ?>
                                        
                                            <?php echo e($clicked_item->getCashbackString()); ?>

                                        <?php else: ?>
                                        <img class="cb-icon lozad" src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e(config('pcb.cashback.icon')); ?>" alt="cb-icon"> 
                                        <?php echo e($store->getCashbackString()); ?>

                                        <?php endif; ?>

                            </p>

                            <span>  <?php echo e(__('public.out_page.activated_discount',['STORE'=>$store->name])); ?></span>
                            <?php else: ?> <?php echo __('public.out_page.your_order_at',['store'=>$store->name,'STORE'=>$store->name]); ?> <?php endif; ?>
                            </div>
                            <div class="out-store-logo">
                            <img src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e($store->logo); ?>" alt="<?php echo e($store->name); ?>" class="img-fluid lozad">
                            </div>
                            <?php if($clicked_item && $clicked_item->code): ?>


                            <div class="offer-coupon-code">
                                <div class="input-group">
                                <input type="text" class="lb-copoun-code form-control" value="<?php echo e($clicked_item->code); ?>" readonly="">
                                    <div class="input-group-append">
                                        <button class="btn lb-copy-btn" type="button">
                                        <i class="far fa-copy"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <?php endif; ?>

                        <p> <?php echo __('public.out_page.your_trip_id',['CLKCODE'=>$click_code]); ?></p>
                        </div>
                       
                        <div class="lb-spinner"><div></div><div></div><div></div><div></div></div>
                    </div>
                    <p class="mt-4 fw-medium"><?php echo __('public.out_page.taking_long_note',['LINK'=>"gotoMerchant()"]); ?></p>
                </div>
            </div>
            <?php else: ?>
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-9 col-md-6 col-xl-5 col-xxl-4">
                    <div class="outpage-before-form">
                        <div class="out-before-store-info">
                            <div class="out-info">
                                <div class="out-store-logo mt-0">
                                <img src="<?php echo e($store->logo); ?>" alt="<?php echo e($store->name); ?>" class="img-fluid">
                                </div>
                                <div class="sm-heading mb-3">
                                    


                                    <?php echo e(__('public.out_page.sign_up_note')); ?> <br><span class="now-cb">
                                        <?php if($object_type=='deal' && $clicked_item->cashback > 0 ): ?>
                                        
                                        <?php echo e($clicked_item->getCashbackString()); ?>

                                    <?php else: ?>
                                    <img class="cb-icon lozad" src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e(config('pcb.cashback.icon')); ?>" alt="cb-icon"> 
                                    <?php echo e($store->getCashbackString()); ?>

                                    <?php endif; ?>
                                </span><br> <?php echo __('public.out_page.guest_order_at',['store'=>$store->name]); ?>

                                </div>
                            </div>
                        </div>
                         <?php if (isset($component)) { $__componentOriginal7166cd45e210137db7fa753c6e90edc89f9b97e4 = $component; } ?>
<?php $component = $__env->getContainer()->make(EnactOn\ProCashBee\UI\View\Components\SignupForm::class, []); ?>
<?php $component->withName('pcb-ui-signup-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal7166cd45e210137db7fa753c6e90edc89f9b97e4)): ?>
<?php $component = $__componentOriginal7166cd45e210137db7fa753c6e90edc89f9b97e4; ?>
<?php unset($__componentOriginal7166cd45e210137db7fa753c6e90edc89f9b97e4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                    </div>
                    <div class="col-12 text-center">
                        <a onclick="gotoMerchant()" class="skipBtn my-2 pointer"><?php echo e(__('public.out_page.skip_cashback')); ?></a>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            </div>
        </section>


        <section class="d-none pt-0" id="withAdsBlocked">
            <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <div class="main-content-form">
                        <div class="home-page-form-container d-block">
                        <div class="out-store-logo mt-0">
                                <img src="<?php echo e($store->logo); ?>" alt="<?php echo e($store->name); ?>" class="img-fluid">
                         </div>
                         <div class="text-center">
                             <h4><?php echo e(__('public.out_page.adblocker_alert')); ?></h4>
                             <?php if($store->cashback_enabled): ?>

                                    <div class="now-cb">

                                        <?php if($object_type=='deal' && $clicked_item->cashback > 0 ): ?>
                                            <?php echo e($clicked_item->getCashbackString()); ?>

                                        <?php else: ?>
                                        <img class="cb-icon lozad" src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e(config('pcb.cashback.icon')); ?>" alt="cb-icon"> 
                                        <?php echo e($store->getCashbackString()); ?>

                                        <?php endif; ?>

                                    </div>
                            <?php endif; ?>


                            <p><?php echo e(__('public.out_page.track_order_note')); ?></p>

                            <p>
                                <a href="<?php echo e(pcb_route('unblock-adblock')); ?>" target="_blank"><?php echo e(__('public.out_page.whitelist_adblocker')); ?></a>
                            </p>

                            <a class="md-btn btn pointer" onClick="window.location.reload();" role="button"><?php echo e(__('public.out_page.adblocker_shop_now')); ?></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </section>



<?php $__env->stopSection(); ?>

<?php $__env->startPush('footStack'); ?>
    <script>
	
	window.is_logged_in = <?php echo e(intval( Auth::check() )); ?>;
	
function gotoMerchant() {
    window.location = '<?php echo $redirect_url; ?>';
}

window.cashback_enabled = <?php echo e($store->cashback_enabled); ?>;

if( !window.cashback_enabled  || ( window.is_logged_in  && !window.ads_blocked ))
{
document.getElementById('withOutAdsBlocked').classList.remove('d-none');

setTimeout(function(){
    if(!window.ads_blocked || ! window.is_logged_in)
  window.location = '<?php echo $redirect_url; ?>';
 }, ( <?php echo e(config('pcb.cashback.out_seconds')); ?>  * 1000 ) );

}
else if(window.ads_blocked &&  window.is_logged_in)
document.getElementById('withAdsBlocked').classList.remove('d-none');
else
document.getElementById('withOutAdsBlocked').classList.remove('d-none');


<?php if(auth()->guard()->check()): ?>
window.cashback_activated  = true;
window.clickData = {
    cb_status : window.cashback_enabled ,
    store_id : <?php echo e($store->id); ?>,
    domain_name : '<?php echo e($store->domain_name); ?>',
    trip_id : '<?php echo e($click_code); ?>'
};


let ext_message = {
    from: "lbpro_out_page",
    action: "SAVE_TRIP_INFO",
    data: {
      cashback_activated: window.cashback_activated,
      clickData: window.clickData,
    },
  };

  chrome.runtime.sendMessage(
    'mifnbmecabfdlkfdlefkgbifoeebjmkh',
    JSON.stringify(ext_message),
    function () {
      console.log("message passed");
    }
  );

<?php endif; ?>

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.headless', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kaped.app/packages/ui/resources/views/pages/out/index.blade.php ENDPATH**/ ?>