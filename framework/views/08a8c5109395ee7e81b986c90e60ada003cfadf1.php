<script>
    window.menuItems = <?php echo json_encode($menuItems, 15, 512) ?>;
    window.availableLangs = <?php echo json_encode(pcb_lang_switches(), 15, 512) ?>;
    window.downloadOptions = <?php echo json_encode(config('pcb.download'), 15, 512) ?>;
</script>

<?php if(config('pcb.adblocker.ad_enabled')): ?>

<div id="adBlockWrapper" class="addblock d-none d-lg-none d-">
    <div class="text-center p-2 alert-danger">
        <div class="d-flex justify-content-center align-items-center">
            <div class="me-4 d-flex align-items-center">
                <i class="fas fa-exclamation-circle fa-lg me-2"></i>
            </div>
            <div class="text-start">
                <?php echo __pb(config('pcb.adblocker.notice')); ?>

            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if(config('pcb.app_install_cta_bar.ai_cta_enabled') && config('pcb.app_install_cta_bar.ai_location')=='header'): ?>
<div class="header-cta app-install-cta text-center p-2 text-white d-none d-flex align-items-center justify-content-between" style="background-color: <?php echo e(config('pcb.app_install_cta_bar.ai_bg_color','#F9C73D')); ?>">
    <div class=" d-flex align-items-center">
        <i onclick="hideAppInstallCtaBar()" class="fas fa-times m-1"></i>
        <div class="px-2"> <img src="<?php echo e(config('pcb.web.favicon')); ?>" alt="" class="img-fluid"> </div>
        <div class="text-start"><?php echo __pb( config('pcb.app_install_cta_bar.ai_content') ); ?></div>
    </div>
    <a href="<?php echo e(config('pcb.download.app_android')); ?>" class="btn">Install</a>
</div>
<?php endif; ?>

<?php if(config('pcb.cta_bar.cta_enabled') && config('pcb.cta_bar.location')=='header'): ?>
<div class="header-cta text-center p-2 text-white" style="background-color: <?php echo e(config('pcb.cta_bar.bg_color','#F9C73D')); ?>">
    <div> <?php echo __pb( config('pcb.cta_bar.content') ); ?> </div>
</div>
<?php endif; ?>

<header class="main-header mb-3 loading">
    <div class="skeleton-card">
        <div class="header">
            <div class="img"></div>
        </div>
        <div class="skel-btns">
            <div class="skel-btn skel-btn-1"></div>
            <div class="skel-btn skel-btn-2"></div>
        </div>
    </div>
</header>

<script src="<?php echo e(asset('ui/js/menu.js')); ?>?ver=<?php echo e(config('pcb.dev.asset_version')); ?>"></script>
<?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/header.blade.php ENDPATH**/ ?>