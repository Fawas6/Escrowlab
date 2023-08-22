<?php
    $faqContent = getContent('faq.content', true);
    $faqElements = getContent('faq.element', false, null, true);
?>

<section class="section">
    <div class="container">
        <div class="row g-4 justify-content-xl-between align-items-center">
            <div class="col-lg-6">
                <img src="<?php echo e(getImage('assets/images/frontend/faq/' . @$faqContent->data_values->image, '645x580')); ?>" alt="<?php echo app('translator')->get('image'); ?>" class="img-fluid" />
            </div>
            <div class="col-lg-6">
                <div class="ms-xxl-5">
                    <h3 class="section-title mt-lg-0 text-center text-lg-start">
                        <?php echo e(__(@$faqContent->data_values->heading)); ?>

                    </h3>
                    <p class="section-subtitle fw-light text-center text-lg-start">
                        <?php echo e(__(@$faqContent->data_values->subheading)); ?>

                    </p>
                    <div class="accordion custom--accordion" id="accordionExample">
                        <?php $__currentLoopData = $faqElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed <?php if(!$loop->first): ?> show <?php endif; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo e($loop->index); ?>" <?php if($loop->first): ?> aria-expanded="true" <?php endif; ?>>
                                        <?php echo e(__(@$faq->data_values->question)); ?>

                                    </button>
                                </h2>
                                <div id="collapse-<?php echo e($loop->index); ?>" class="accordion-collapse collapse <?php if($loop->first): ?> show <?php endif; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php echo @$faq->data_values->answer ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\Files\core\resources\views/templates/basic/sections/faq.blade.php ENDPATH**/ ?>