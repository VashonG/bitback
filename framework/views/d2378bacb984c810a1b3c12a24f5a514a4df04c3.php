<div class="main-content-form d-guest">

<?php if($bonus_amount>0 && !$socialCallback): ?>
    <div class="get-cashback-btn">
        <div class="me-2"><img class="lozad" src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e(pcb_ui_image('form-gift.svg')); ?>" alt="Gift"></div>
       <div class="text-center"> 
       <?php echo e(__('auth.form.sign_up_get')); ?> 
       <span class="mx-2 text-center"><?php echo e(pcb_currency($bonus_amount)); ?> </span>
       <?php echo e(__('auth.form.today')); ?></div> 
       
    </div>
    <?php endif; ?>


    
    <?php if(!$socialCallback): ?>
     <div class="other-login-btns">
            <?php if( strlen( config('pcb.services.facebook_client_id')   )  > 3 ): ?>
            <a href="<?php echo e(route('social-login.redirect',['type'=>'facebook'])); ?>" class="facebook-login-btn">
                <!-- <i class="fab fa-facebook"></i> -->
                <div class="fb-logo"> <img class="lozad" src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e(pcb_ui_image('f_logo_white.png')); ?>" alt="facebook.png"> <span class="s-login-text"><?php echo e(__('auth.form.signin_with_facebook')); ?></span></div> 
            </a>
            <?php endif; ?>
            <?php if( strlen( config('pcb.services.google_client_id')   )  > 3 ): ?>
            <a href="<?php echo e(route('social-login.redirect',['type'=>'google'])); ?>" class="google-login-btn">
               <div class="google-logo"> <img class="lozad" src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e(pcb_ui_image('g-logo.png')); ?>" alt="g-logo"> <span class="s-login-text"><?php echo e(__('auth.form.signin_with_google')); ?></span></div> 
                    <!-- <i class="fab fa-google"></i> -->
                    </a>
            <?php endif; ?>
            <?php if( strlen( config('pcb.services.apple_client_id')   )  > 3 ): ?>
            <a href="<?php echo e(route('social-login.redirect',['type'=>'apple'])); ?>" class="apple-login-btn">
            <div class="apple-logo"> <img class="lozad" src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e(pcb_ui_image('apple-logo.svg')); ?>" alt="apple-logo"> <span class="s-login-text"><?php echo e(__('auth.form.signin_with_apple')); ?></span></div> 
                <!-- <i class="fab fa-apple"></i> -->
            </a>
            <?php endif; ?>
      </div>
      <div class="post-note px-1 border-bottom-grey"><?php echo e(__('auth.form.note')); ?></div>



    <?php else: ?>
    <div class="p-3 text-center">
        <h3><?php echo e(__('auth.form.social_media_signup',['platform'=>$socialCallback['name']])); ?></h3></div>
    <?php endif; ?>




    <?php if( $formType == 'submit'): ?>
        <div id="message_signup"></div>
    <?php endif; ?>
    


    
    <div class="home-page-form-container">
        <form action="<?php echo e(route('signup.submit')); ?>" method="POST" class="home-page-form" id="<?php echo e($formId); ?>">
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
                <input type="email" class="form-control" placeholder="<?php echo e(__('auth.form.email_placeholder')); ?>" name="email" value="<?php if($socialCallback): ?> <?php echo e($socialCallback['email']); ?>  <?php else: ?> <?php echo e(old('email')); ?> <?php endif; ?>" required>

                <div class="input-group-append">
                    <span class="input-group-text">
                        <img src="<?php echo e(pcb_ui_image('email-icon.png')); ?>" alt="email">
                    </span>
                </div>

            </div>

            <?php if($socialCallback): ?>

            <p><?php echo e(__('auth.form.social_media_email_validation')); ?></p> </br>



            <input type="hidden" name="fullname" value="<?php echo e($socialCallback['name']); ?>" />
            <input type="hidden" name="provider_type" value="<?php echo e($socialCallback['provider_type']); ?>" />
                <input type="hidden" name="provider_id" value="<?php echo e($socialCallback['provider_id']); ?>" />


                <?php else: ?>

                <div class="input-group mt-3 in-password">
                    <input type="password" class="form-control pwdInp" placeholder="<?php echo e(__('auth.form.password_placeholder')); ?>" name="password" required>

                    <div class="input-group-append">
                        <span class="input-group-text">
                            <img class="lozad" src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e(pcb_ui_image('password-lock-icon.png')); ?>" alt="email">
                        </span>
                    </div>
                </div>

                <?php endif; ?>

                <div class="<?php if(!Session::has('referral')): ?> referral-code <?php endif; ?> input-group form-group">
                    <input type="text" value="<?php if(Session::has('referral')): ?><?php echo e(Session::get('referral')); ?><?php endif; ?>" name="referrer_code" placeholder="<?php echo e(__('auth.form.referral_code_placeholder')); ?>" class="input form-control" size="20">

                    <div class="input-group-append">
                        <span class="input-group-text">
                            <img class="lozad" src="<?php echo e(pcb_lazy_image()); ?>" data-src="<?php echo e(pcb_ui_image('referral-icon.svg')); ?>" alt="referral-icon">
                        </span>
                    </div>
                </div>

                <div class="d-flex justify-content-between flex-wrap">

                    <div class="form-check mb-1 d-flex">
                        <input id="<?php echo e($formId); ?>-agree-privacy" class="form-check-input me-2" type="checkbox" required name="privacy_policy" <?php echo e(old('privacy_policy') ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="<?php echo e($formId); ?>-agree-privacy"><?php echo __('auth.form.agree_policy',['TERMS'=>route('terms'),'PRIVACY'=>route('privacy')]); ?> </label>
                    </div>


                </div>
                <?php if(!Session::has('referral')): ?>
                <div class="lb-refer-link refer"><a href="javascript:void(0)" class=""><?php echo e(__('auth.form.someone_refer_you')); ?></a></div>
                <?php endif; ?>

                <input type="hidden" data-target="<?php echo e($formId); ?>" name="g-recaptcha-id" value="">

                <div id='recaptcha' class="g-recaptcha"
                    data-sitekey="<?php echo e(config('grecaptcha.site_key')); ?>"
                    data-callback="onSubmit"
                    data-size="invisible"></div>

				<?php echo $__env->first(['partials.get_inputs','partials.na'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<?php if( $formType != 'submit'): ?>
                <div class="lb-form-btn">
                    <button type="button" onclick="btnClik('<?php echo e($formId); ?>')" class="form-control btn joinBtn"><?php echo e(__('auth.button.join_now')); ?></button>
                </div>
				<?php else: ?> 
					<div class="lb-form-btn">
						<button type="submit"  class="form-control btn joinBtn"><?php echo e(__('auth.button.join_now')); ?></button>
					</div>
				<?php endif; ?>

        </form>
    </div>


    <?php if(!$socialCallback): ?>
    <div class="form-bottom">
        <p class="existing-user"><?php echo e(__('auth.form.existing_user')); ?><a class="text-orange ms-2" data-bs-toggle=modal href=# data-bs-dismiss=modal data-bs-target=#signinModal><?php echo e(__('auth.button.signin')); ?></a>      </p>
        <div>
            <p class="text-center text-medium-grey lb-terms"><?php echo e(__('auth.form.terms_apply')); ?></p>
        </div>
    </div>
    <?php endif; ?>

</div><?php /**PATH /var/www/kaped.app/packages/ui/src/Providers/../../resources/views/components/signup-form.blade.php ENDPATH**/ ?>