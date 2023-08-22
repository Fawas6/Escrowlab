<?php
    $partnerContent = getContent('partner.content', true);
    $partnerElements = getContent('partner.element', orderById: true);

?>

<div class="client-wrapper section--sm">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-md-8 col-xl-6">
                <h3 class="section-title mt-lg-0 text-center">
                    <?php echo e(__(@$partnerContent->data_values->heading)); ?>

                </h3>
                <p class="section-subtitle fw-light text-center">
                    <?php echo e(__(@$partnerContent->data_values->subheading)); ?>

                </p>
            </div>
        </div>
        <div class="row g-4 g-md-0 align-items-center">
            <div class="col-12">
                <div class="client-section">
                    <div class="client-slider">
                        <?php $__currentLoopData = $partnerElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="client-slider__item">
                                <img src="<?php echo e(getImage('assets/images/frontend/partner/' . @$partner->data_values->image, '130x50')); ?>" alt="image" class="client-slider__img">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Files\core\resources\views/templates/basic/sections/partner.blade.php ENDPATH**/ ?>