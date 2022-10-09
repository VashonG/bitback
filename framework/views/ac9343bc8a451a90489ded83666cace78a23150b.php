<?php $formId = 'loginForm'. (($fromModal) ? 'Modal' : ''); ?>
<div class="main-content-form d-guest">
    <div class="get-cashback-btn px-4">
        <?php echo e(__('auth.form.signin')); ?>

    </div>
    <div class="other-login-btns">
        <?php if( strlen( config('pcb.services.facebook_client_id')   )  > 3 ): ?>
        <a href="<?php echo e(route('social-login.redirect',['type'=>'facebook'])); ?>" class="facebook-login-btn">
                <!-- <i class="fab fa-facebook"></i> -->
                <div class="fb-logo"> <img src="<?php echo e(pcb_ui_image('f_logo_white.png')); ?>" alt="facebook.png"> <span class="s-login-text"><?php echo e(__('auth.form.signin_with_facebook')); ?></span></div> 
            </a>
        <?php endif; ?>
        <?php if( strlen( config('pcb.services.google_client_id')   )  > 3 ): ?>
        <a href="<?php echo e(route('social-login.redirect',['type'=>'google'])); ?>" class="google-login-btn">
               <div class="google-logo"> <img src="<?php echo e(pcb_ui_image('g-logo.png')); ?>" alt="g-logo"> <span class="s-login-text"><?php echo e(__('auth.form.signin_with_google')); ?></span></div> 
                    <!-- <i class="fab fa-google"></i> -->
                    </a>
    <?php endif; ?>
    <?php if( strlen( config('pcb.services.apple_client_id')   )  > 3 ): ?>
    <a href="<?php echo e(route('social-login.redirect',['type'=>'apple'])); ?>" class="apple-login-btn">
            <div class="apple-logo"> <img src="<?php echo e(pcb_ui_image('apple-logo.svg')); ?>" alt="apple-logo"> <span class="s-login-text"><?php echo e(__('auth.form.signin_with_apple')); ?></span></div> 
                <!-- <i class="fab fa-apple"></i> -->
            </a>
    <?php endif; ?>
</div>
<div class="post-note px-1 border-bottom-grey"><?php echo e(__('auth.form.note')); ?></div>
<?php if($fromModal): ?>
<div id="message_signin"></div>
<?php endif; ?>

<div class="home-page-form-container">
    <form action="<?php echo e(route('signin.submit')); ?>" method="POST" class="home-page-form" id="<?php echo e($formId); ?>" <?php if($fromModal): ?> onsubmit="signInForm(event)" <?php endif; ?>>
        
<div id="<?php echo e($formId); ?>-errors-block">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul class="p-0 m-0">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
</div>
        <?php echo csrf_field(); ?>
        <div class="input-group form-group">
        <input type="email" class="form-control"  value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('auth.form.email_placeholder')); ?>" name="email" required autofocus>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            <div class="input-group-append">
                <span class="input-group-text">
                    <img src="<?php echo e(pcb_ui_image('email-icon.png')); ?>" alt="email">
                </span>
            </div>
        </div>
        <div class="input-group mt-3 in-password">
        <input type="password" class="form-control"  placeholder="<?php echo e(__('auth.form.password_placeholder')); ?>" name="password" required>
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            <div class="input-group-append">
                <span class="input-group-text">
                    <img src="<?php echo e(pcb_ui_image('password-lock-icon.png')); ?>" alt="img">
                </span>
            </div>
        </div>
        <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-center mb-1">
                <input class="me-1" id="remember-me" type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                <label for="remember-me"><?php echo e(__('auth.form.remember_me')); ?></label>
            </div>

            <div class="forgot-pwd">
                <a role="button" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#forgotPwdModal">
                <?php echo e(__('auth.form.forgot_password_link')); ?>

                </a>
            </div>
        </div>

        <input type="hidden" data-target="<?php echo e($formId); ?>" name="g-recaptcha-id" value="">

        <div id='recaptcha' class="g-recaptcha"
                    data-sitekey="<?php echo e(config('grecaptcha.site_key')); ?>"
                    data-callback="onSubmit"
                    data-size="invisible"></div>
					
		<?php echo $__env->first(['partials.get_inputs','partials.na'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					
        <div class="lb-form-btn">
            <button type="button" onclick="btnClik('<?php echo e($formId); ?>')" class="form-control btn"><?php echo e(__('auth.button.signin')); ?></button>
        </div>
    </form>
</div>

<div class="form-bottom">

    <p class="existing-user"><?php echo e(__('auth.form.not_member')); ?>

        <a class="text-orange ms-2" <?php echo e($fromModal ? 'data-bs-toggle=modal href=# data-bs-dismiss=modal data-bs-target=#joinusModal' : 'href=' .  route('register')); ?>><?php echo e(__('auth.button.join_now')); ?></a>
    </p>

</div>
</div><?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/signin-form.blade.php ENDPATH**/ ?>