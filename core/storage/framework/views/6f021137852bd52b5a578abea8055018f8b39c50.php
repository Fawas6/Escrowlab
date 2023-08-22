<?php
    $subscribeContent = getContent('subscribe.content', true);
?>

<div class="section--sm subscribe bg--accent">
    <div class="container">
        <div class="row gy-4 align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="subscribe-content text-lg-start text-center">
                    <h4 class="subscribe-title text-white my-0"><?php echo e(__(@$subscribeContent->data_values->heading)); ?></h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <form action="" method="POST" id="subscribeForm">
                    <?php echo csrf_field(); ?>
                    <div class="input-group">
                        <input type="email" name="email" class="form-control form--control" placeholder="<?php echo app('translator')->get('Your Email Address'); ?>...">
                        <button type="submit" class="btn--base input-group-text border-0 subscribe-btn"><?php echo app('translator')->get('Subscribe'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('style'); ?>
    <style>
        .subscribe-btn {
            font-size: 1rem;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        "use strict";
        (function($) {
            $("#subscribeForm").on('submit', function(e) {
                e.preventDefault();
                let formData = new FormData($(this)[0]);
                $.ajax({
                    url: `<?php echo e(route('subscribe')); ?>`,
                    method: "POST",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            notify('success', response.message)
                        } else {
                            notify('error', response.error || `<?php echo app('translator')->get('Something went wrong'); ?>`)
                        }
                    },
                    error: function(e) {
                        notify(`<?php echo app('translator')->get('Something went wrong'); ?>`)
                    }
                });
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\Files\core\resources\views/templates/basic/sections/subscribe.blade.php ENDPATH**/ ?>