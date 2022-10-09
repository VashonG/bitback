<?php $__env->startSection('content'); ?>
<div class="container">
<?php echo $page->getBreadcrumb(); ?>

</div>



<?php echo $__env->make('components.dynamic-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="help-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <?php echo $page->footer_content; ?>

            </div>
            <div class="col-lg-4 col-md-6">
                <form class="contact-page-form" id="contactForm" method="POST" action="<?php echo e(route('contact.submit')); ?>" id="contact-us">
                    <?php echo csrf_field(); ?>

                    <div id="contactForm-errors-block">
                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>




                    <div class="form-row">
                        <div class="form-group mb-3">
                            <input type="text" value="<?php echo e(old('name')); ?>" name="name" class="form-control"
                                placeholder="<?php echo e(__('public.contact_us.name_placeholder')); ?>" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group mb-3">
                                <input type="email" value="<?php echo e(old('email')); ?>" name="email" class="form-control"
                                    placeholder="<?php echo e(__('public.contact_us.email_placeholder')); ?>" required>
                            </div>

                            <div class="form-group mb-3">
                                <select id="inputState" class="form-select" name="reason" required>
                                    <option value=''><?php echo e(__('public.contact_us.subject_placeholder')); ?></option>
									
									<?php $__currentLoopData = explode(PHP_EOL,config('pcb.listing.contact_us_reasons.'.app()->getLocale(),'')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reason): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php if(strlen($reason) > 2): ?>
											<option> <?php echo e($reason); ?> </option>
										<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group mb-3">
                                <textarea class="form-control" required name="message" id="exampleFormControlTextarea1"
                                    rows="3"
                                    placeholder="<?php echo e(__('public.contact_us.msg_placeholder')); ?>"><?php echo e(old('message')); ?></textarea>
                            </div>
                        </div>

                        <div id='recaptcha' class="g-recaptcha"></div>

                        <div class="form-group">
                            <button type="button" onclick="contactSubmitBtnCLicked()" class="btn"><?php echo e(__('public.contact_us.submit_btn')); ?></button>
                            <div id="formSubmitSpinner" class="spinner-border text-primary d-none" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('footStack'); ?>
<script>
    window.contactFormSubmit = function() {
        // alert('hello');
        const myForm = document.getElementById('contactForm');
        const spinner = document.getElementById('formSubmitSpinner');
        const statusMessage = new StatusMessage(document.getElementById("contactForm-errors-block"));

        let contactFormURL = window.base_url + '/contact';
        
        fetch(contactFormURL, {
                headers: {
                    "Content-Type": "application/json"
                    , "Accept": "application/json"
                    , "X-Requested-With": "XMLHttpRequest"
                    , "X-CSRF-TOKEN": window.csrf_token
                }
                , method: 'post'
                , credentials: "include"
                , body: JSON.stringify({
                    'name': myForm.name.value
                    , 'email': myForm.email.value
                    , 'reason': myForm.reason.value
                    , 'message': myForm.message.value
                    , 'g-recaptcha-response': myForm['g-recaptcha-response'].value
                })
        })
        .then(async r => r.json())
        .then(res => {
            if (res.error == 1) { 
				statusMessage.show(Array.isArray(res.data) && res.data.length > 0 ? res.data : res.msg, "alert-danger p-3 rounded");
                spinner.classList.add('d-none');
                grecaptcha.reset();
			}
            else {
                statusMessage.show(res.msg, "alert-success p-3 rounded");
                spinner.classList.add('d-none');
                myForm.reset();
                grecaptcha.reset();
            }
        })
        .catch(function(error) {
            // TODO: display proper errors
            if (res.success == 0) statusMessage.show(Array.isArray(res.data) && res.data.length > 0 ? res.data : res.msg, "alert-danger p-3 rounded");
            grecaptcha.reset();
            spinner.classList.add('d-none');
            console.log(error);
        });
        // document.getElementById('contactForm').submit();
    }

    window.contactSubmitBtnCLicked = function() {
        const spinner = document.getElementById('formSubmitSpinner');
        
        try {
            const myForm = document.getElementById('contactForm');

            if(!myForm.checkValidity()) return myForm.reportValidity();

            spinner.classList.remove('d-none');

            let recaptchaId;
            if(document.querySelector('#recaptcha') && !document.querySelector('.g-recaptcha-response'))
                recaptchaId = grecaptcha.render( myForm.querySelector('.g-recaptcha') , {
                    "sitekey": window.grecaptcha_site_key, 'callback' : contactFormSubmit, 'size': 'invisible' 
                });

            grecaptcha.execute(recaptchaId);
        } catch (error) {
            console.log(error)
        }
    }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kaped.app/packages/ui/resources/views/pages/contact/index.blade.php ENDPATH**/ ?>