<script>
window.bonuses = <?php echo json_encode(procash_bonuses(), 15, 512) ?>;


window.preact_config = {
    API_URL: window.api_url
    , APP_URL: "<?php echo e(config('app.url')); ?>"
    , APP_OUT_URL: "<?php echo e(route('out',['type'=>':type','type_id'=>':type_id'])); ?>/"
    , USER_URL_PREFIX : "/user/"
    , CURRENCY_PREFIX: "$"
    , DEFAULT_LANG: "<?php echo e(config('pcb.web.default_lang')); ?>"
    , FALLBACK_LANG: "<?php echo e(config('pcb.web.fallback_lang')); ?>"
    , DEFAULT_COUNTRY : "<?php echo e(config('pcb.web.default_country')); ?>"
    , IS_PLUS : <?php echo e(intval(config('app.is_pro_plus',false))); ?>

    , IS_MOBILE : window.screen.is_mobile
    , LANG: window.lang
    , IS_MULTILANG : <?php echo e(intval(! config('localized-routes.omit_url_prefix_for_locale') )); ?>

    , IMAGE_URL : window.image_path
    , CURRENCIES :  <?php echo json_encode(config('pcb.currencies.keys'), 15, 512) ?>
    , CURRENCY : <?php echo json_encode(config('pcb.currencies.default'), 15, 512) ?>
	, CURRENCY_ROUND : <?php echo e(config('pcb.store.cashback_amount_round',2)); ?>

    , REGISTER_PAGE : "<?php echo e(route('register')); ?>?referral="
    , HOME_URL : window.home_url
    , SHARE_LINK_URL : "<?php echo e(route('out.user.link',['code'=>':code'])); ?>"
    , SINGLE_DEAL_URL : "<?php echo e(route('deal.single',['slug'=>':slug'])); ?>"
    , STORE_URL : "<?php echo e(route('store.single',['slug'=>':slug'])); ?>"
    , ALL_STORES_PAGE : "<?php echo e(route('all_stores')); ?>"
    , DOD_PAGE : "<?php echo e(pcb_route('all_deals')); ?>"
    , DATE_FORMAT :  "<?php echo e(config('pcb.web.date_format','L')); ?>"
    , PAGINATION : [<?php echo e(config('pcb.listing.entries_per_table')); ?>]
    , MAX_CLAIM_DAYS : <?php echo e(config('pcb.cashback.claim_min_days',2)); ?>

    , MIN_CLAIM_DAYS : <?php echo e(config('pcb.cashback.claim_max_days',10)); ?>

    , REFERRAL_ON : <?php echo e(config('pcb.cashback.referral_enabled',false)); ?>

    , REFERRAL_PERCENT : <?php echo e(config('pcb.cashback.referral_percent',0)); ?>

    , SHOULD_VERIFY_PHONE : <?php echo e(config('pcb.cashback.should_verify_phone')); ?>

    , LANGS : <?php echo (json_encode(config('pcb.lang.all'), JSON_UNESCAPED_UNICODE)); ?>

    , CB_ICON : '<?php echo e(config('pcb.cashback.icon')); ?>'
    , META_INFO : <?php echo e(config('pcb.web.meta_info', 1)); ?>

	, BONUSES : window.bonuses
	, DATE_FORMATS : <?php echo json_encode( pcb_locale_date_formats() , 15, 512) ?>
}
window.routesForHeaderSearch = {
    stores: "<?php echo e(route('store.single',['slug'=>'/'])); ?>"
    , store_categories: "<?php echo e(route('store.category',['slug'=>'/'])); ?>"
    , coupon_categories: "<?php echo e(route('coupon.category',['slug'=>'/'])); ?>"
}


window.user_modules = <?php echo json_encode($user_modules, 15, 512) ?>;

</script>

<?php if( config('pcb.adblocker.ad_enabled',true) ): ?>
<script src="<?php echo e(asset('js/gads.js')); ?>"></script>
<?php endif; ?>

<script type="text/javascript">
      var recaptchaCallback = function() {
        grecaptcha.render();
      };
</script>

<script src="<?php echo e(asset('ui/js/app.js')); ?>?ver=<?php echo e(config('pcb.dev.asset_version')); ?>"></script>
<script src="<?php echo e(asset('js/custom.js')); ?>?ver=<?php echo e(config('pcb.dev.asset_version')); ?>"></script>





<style>
    .wp-block-column {
        flex: 1 0 0%;
    }
    .pointer {cursor: pointer;}
    #ads-advertise {
        display: none;
        height: 0px;
    }

    .row.invite-row .email-invite-col:before { content : "<?php echo e(trans('user_dashboard.share_earn.or')); ?>" }

</style>

<!-- Font-awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

<!-- Required: Roboto font for google Login button -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

<?php echo config('pcb.theme.font_code'); ?>


<script type="text/javascript">

    if(document.getElementById('adBlockWrapper')){
        if(document.getElementById('ads-advertise') || !window.is_logged_in )
        {
            window.ads_blocked  = false;
            document.getElementById('adBlockWrapper').classList.remove();
        }
        else
        document.getElementById('adBlockWrapper').classList.add('d-block');
    }
</script>




<?php if(strlen(config('services.onesignal.app_id')) >5 ): ?>
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async defer></script>
<?php endif; ?>

<script src="https://www.google.com/recaptcha/api.js?hl=<?php echo e(app()->getLocale()); ?>&render=explicit" async defer></script>


<?php echo config('pcb.dev.code_foot'); ?><?php /**PATH /var/www/kaped.app/packages/ui/resources/views/layouts/foot.blade.php ENDPATH**/ ?>