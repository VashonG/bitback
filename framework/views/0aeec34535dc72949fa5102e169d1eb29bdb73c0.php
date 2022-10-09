<div class="scrolltop-wrap">
    <a href="javascript:void(0)" aria-label="Scroll to top">
        <i class="fa fa-chevron-up"></i>
        <span>Top</span>
    </a>
</div>

<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-grid">
                    <?php $__currentLoopData = $footers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="footer-grid-col">
                        <h5 class="footer-list-title fw-semi-bold"><?php echo e($footer->title); ?></h5>
                        <?php switch($footer->footer_type):
                        case ('html'): ?>
                        <?php echo $footer->data[app()->getLocale()]??''; ?>

                        <?php break; ?>
                        <?php case ('menu'): ?>

                        <ul class="list-unstyled footer-list hide">
                            <?php $__currentLoopData = $footer->data->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(pcb_menu_link($item->type,$item->value)); ?>"> <?php echo e($item->label); ?> </a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>

                        <?php break; ?>
                        <?php case ('social'): ?>
                        <ul class="footer-list hide footer-social-grid list-unstyled">
                            <?php $__currentLoopData = config('pcb.social',[]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $platform => $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(strlen($link)>2): ?>
                            <li><a href="<?php echo e($link); ?>" target="_blank">
                                    <i class="pcbi-<?php echo e($platform); ?> me-2"></i></a></li>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php break; ?>
                        <?php default: ?>

                        <?php endswitch; ?>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>

    <div class="lb-footer-copyright">
        <p class=""> <?php echo e(str_ireplace(['#YEAR','#SITENAME'], [date('Y') , config('pcb.web.name')]   , __pb(config('pcb.web.copyright')))); ?> </p>
    </div>
</footer>
<div class="footer-cta-wrapper">
    <?php if(config('pcb.app_install_cta_bar.ai_cta_enabled') && config('pcb.app_install_cta_bar.ai_location')=='footer'): ?>
    <div class="header-cta app-install-cta text-center p-2 text-white d-none d-flex align-items-center justify-content-between" style="background-color: <?php echo e(config('pcb.app_install_cta_bar.ai_bg_color','#F9C73D')); ?>">
        <div class=" d-flex align-items-center">
            <i onclick="hideAppInstallCtaBar()" class="fas fa-times m-1"></i>
            <div class="px-2"> <img src="<?php echo e(config('pcb.web.favicon')); ?>" alt="" class="img-fluid"> </div>
            <div class="text-start"><?php echo __pb( config('pcb.app_install_cta_bar.ai_content') ); ?></div>
        </div>
        <a href="<?php echo e(config('pcb.download.app_android')); ?>" class="btn">Install</a>
    </div>
    <?php endif; ?>

    <?php if(config('pcb.cta_bar.cta_enabled') && config('pcb.cta_bar.location')=='footer'): ?>
    <div class="header-cta text-center p-2 text-white" style="background-color: <?php echo e(config('pcb.cta_bar.bg_color','#F9C73D')); ?>">
        <div> <?php echo __pb( config('pcb.cta_bar.content') ); ?> </div>
    </div>
    <?php endif; ?>
</div><?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/footer.blade.php ENDPATH**/ ?>