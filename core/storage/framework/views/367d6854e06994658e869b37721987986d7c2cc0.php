<?php
    $aboutContent = getContent('about.content', true);
    $aboutElements = getContent('about.element', orderById: true);
?>

<div class="section--top">
    <div class="container">
        <div class="row g-4 justify-content-lg-between justify-content-center">
            <div class="col-lg-5">
                <div class="section-heading">
                    <h3 class="section-title mt-lg-0 section-title"><?php echo e(__(@$aboutContent->data_values->heading)); ?></h3>
                    <p><?php echo e(__(@$aboutContent->data_values->subheading)); ?></p>
                </div>

                <div class="row gy-4">
                    <?php $__currentLoopData = $aboutElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <span class="flex-shrink-0 text--base d-inline-block lg-text me-3">
                                    <?php echo @$about->data_values->icon; ?>
                                </span>
                                <p class="mb-0">
                                    <?php echo e(__(@$about->data_values->details)); ?>

                                </p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="col-lg-6 col-sm-8 col-10">
                <img src="<?php echo e(getImage('assets/images/frontend/about/' . @$aboutContent->data_values->image, '645x475')); ?>" alt="<?php echo app('translator')->get('image'); ?>" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Files\core\resources\views/templates/basic/sections/about.blade.php ENDPATH**/ ?>