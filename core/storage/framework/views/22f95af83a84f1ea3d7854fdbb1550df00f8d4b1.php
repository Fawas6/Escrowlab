<?php $__env->startSection('content'); ?>
    <?php
        $bannerContent = getContent('banner.content', true);
    ?>

    <section class="hero"
        style="background-image:url(<?php echo e(getImage('assets/images/frontend/banner/' . @$bannerContent->data_values->background_image, '1800x790')); ?>);">
        <div class="hero__content">
            <div class="container">
                <div class="row g-4 justify-content-center align-items-center justify-xxl-between banner-form">

                    <div class="col-md-9 col-lg-7 col-xxl-6 text-center text-lg-start">
                        <h2 class="hero__content-title text-capitalize text--white mt-0">
                            <?php echo e(__(@$bannerContent->data_values->heading)); ?>

                        </h2>
                        <p class="hero__content-para text--white mx-auto ms-lg-0">
                            <?php echo e(__(@$bannerContent->data_values->subheading)); ?>

                        </p>
                        <?php echo $__env->make($activeTemplate . 'partials.escrow_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="col-lg-5 col-xxl-6 d-none d-lg-block">
                        <img src="<?php echo e(getImage('assets/images/frontend/banner/' . @$bannerContent->data_values->front_image, '665x575')); ?>"
                            alt="image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if($sections->secs != null): ?>
        <?php $__currentLoopData = json_decode($sections->secs); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make($activeTemplate . 'sections.' . $sec, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Files\core\resources\views/templates/basic/home.blade.php ENDPATH**/ ?>