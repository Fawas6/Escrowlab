<?php
    $workContent = getContent('how_works.content', true);
    $workElements = getContent('how_works.element', orderById: true);
?>

<section class="section">
    <div class="section__head">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <h3 class="section-title mt-0 text-center">
                        <?php echo e(__(@$workContent->data_values->heading)); ?>

                    </h3>
                    <p class="section-subtitle mb-0 text-center mx-auto">
                        <?php echo e(__(@$workContent->data_values->subheading)); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4 justify-content-center">
            <?php $__currentLoopData = $workElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-3">
                    <div class="process text-center">
                        <div class="icon icon--circle icon--xxl process__icon <?php if(!$loop->last): ?> process__icon-shape <?php endif; ?>">
                            <div class="process-count">
                                <span><?php echo e($loop->index + 1); ?></span>
                            </div>
                            <?php echo @$work->data_values->icon; ?>
                        </div>
                        <h5 class="mb-0">
                            <?php echo e(__(@$work->data_values->details)); ?>

                        </h5>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\Files\core\resources\views/templates/basic/sections/how_works.blade.php ENDPATH**/ ?>