<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Laravel Backup Panel<?php echo e(config('app.name') ? ' - ' . config('app.name') : ''); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset(mix('app.js', 'vendor/laravel_backup_panel'))); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset(mix('app.css', 'vendor/laravel_backup_panel'))); ?>" rel="stylesheet">
</head>
<body>
    <div id="laravel_backup_panel" v-cloak>
        <router-view></router-view>
    </div>

    <!-- Global variables -->
    <script>
        window.LaravelBackupPanel = <?php echo json_encode($globalVariables, 15, 512) ?>;
    </script>
</body>
</html>
<?php /**PATH /var/www/kaped.app/web-app/vendor/pavel-mironchik/laravel-backup-panel/src/../resources/views/layout.blade.php ENDPATH**/ ?>