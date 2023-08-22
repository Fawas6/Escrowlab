<?php
    $featureContent = getContent('feature.content', true);
    $featureElements = getContent('feature.element', orderById: true);
?>

<div class="section">
    <div class="container">
        <div class="row g-4 justify-content-between align-items-center flex-wrap-reverse">
            <div class="col-lg-6">
                <img src="<?php echo e(getImage('assets/images/frontend/feature/' . @$featureContent->data_values->image, '770x660')); ?>" alt="<?php echo app('translator')->get('image'); ?>" class="img-fluid">
            </div>

            <div class="col-lg-6 col-xl-5">
                <h3 class="section-title mt-lg-0 text-center text-lg-start">
                    <?php echo e(__(@$featureContent->data_values->heading)); ?>

                </h3>
                <p class="section-subtitle xxl-text fw-light text-center text-lg-start">
                    <?php echo e(__(@$featureContent->data_values->subheading)); ?>

                </p>
                <ul class="list list--column">
                    <?php $__currentLoopData = $featureElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list--column__item features-item">
                            <div class="d-flex">
                                <div class="icon icon--md icon--circle bg--base text--white flex-shrink-0 me-3">
                                    <?php echo @$feature->data_values->icon; ?>
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="features-title mt-0">
                                        <?php echo e(__(@$feature->data_values->title)); ?>

                                    </h5>
                                    <p class="mb-0">
                                        <?php echo e(__(@$feature->data_values->details)); ?>

                                    </p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Files\core\resources\views/templates/basic/sections/feature.blade.php ENDPATH**/ ?>