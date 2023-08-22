<?php
    $testimonialContent = getContent('testimonial.content', true);
    $testimonialElements = getContent('testimonial.element', orderById: true);
?>

<section class="section bg--light">
    <div class="section__head">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <h3 class="section-title mt-0 text-center">
                        <?php echo e(__(@$testimonialContent->data_values->heading)); ?>

                    </h3>
                    <p class="section-subtitle mb-0 text-center mx-auto">
                        <?php echo e(__(@$testimonialContent->data_values->subheading)); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="testimonial-slider bg-white">
                    <?php $__currentLoopData = $testimonialElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="testimonial-slider__item">
                            <div class="testimonial-slider__icon text-center">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <div class="testimonial-slider__body text-center">
                                <p class="testimonial-slider__body-text">
                                    <?php echo e(__(@$testimonial->data_values->review)); ?>

                                </p>
                            </div>
                            <div class="testimonial-slider__footer text-center">
                                <div class="user__img user__img--xl mx-auto">
                                    <img src="<?php echo e(getImage('assets/images/frontend/testimonial/' . @$testimonial->data_values->image, '100x100')); ?>" alt="<?php echo app('translator')->get('image'); ?>" class="user__img-is">
                                </div>
                                <h5 class="mb-2">
                                    <?php echo e(__(@$testimonial->data_values->name)); ?>

                                </h5>
                                <span class="d-block sm-text">
                                    <?php echo e(__(@$testimonial->data_values->location)); ?>

                                </span>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\Files\core\resources\views/templates/basic/sections/testimonial.blade.php ENDPATH**/ ?>