<?php
    $socialContent = getContent('social_icon.content', true);
    $socialElements = getContent('social_icon.element', orderById: true);
    $contactElements = getContent('contact.element', orderById: true);
    $policyElements = getContent('policy_pages.element', orderById: true);
    $footerContent = getContent('footer_section.content', true);
?>

<footer class="footer">

    <div class="section bg--accent">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-6 col-lg-6  col-xxl-4">
                    <a href="<?php echo e(route('home')); ?>" class="logo mt-0">
                        <img src="<?php echo e(getImage('assets/images/logoIcon/logo.png')); ?>" alt="image" class="img-fluid logo__is">
                    </a>
                    <hr class="footer-hr">
                    <p class="text--white"><?php echo e(__(@$footerContent->data_values->footer_text)); ?></p>

                    <ul class="list list--row">
                        <?php $__currentLoopData = $socialElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list--row__item">
                                <a href="<?php echo e(@$social->data_values->url); ?>" class="social-icon t-link icon icon--sm icon--circle" target="_blank">
                                    <?php echo @$social->data_values->icon ?>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-6 col-xxl-2">
                    <h5 class="mt-0 text--white"><?php echo app('translator')->get('Quick Links'); ?></h5>
                    <hr class="footer-hr">
                    <ul class="list list--column">
                        <li class="list--column__item">
                            <a href="<?php echo e(route('home')); ?>" class="t-link t-link--base text--white d-inline-block">
                                <?php echo app('translator')->get('Home'); ?>
                            </a>
                        </li>
                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list--column__item">
                                <a href="<?php echo e(route('pages', [$data->slug])); ?>" class="t-link t-link--base text--white d-inline-block">
                                    <?php echo e(__($data->name)); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="list--column__item">
                            <a href="<?php echo e(route('blogs')); ?>" class="t-link t-link--base text--white d-inline-block">
                                <?php echo app('translator')->get('Blogs'); ?>
                            </a>
                        </li>
                        <li class="list--column__item">
                            <a href="<?php echo e(route('contact')); ?>" class="t-link t-link--base text--white d-inline-block">
                                <?php echo app('translator')->get('Contact'); ?>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-6 col-xxl-3">
                    <h5 class="mt-0 text--white"><?php echo app('translator')->get('Company Policy'); ?></h5>
                    <hr class="footer-hr">
                    <ul class="list list--column">
                        <?php $__currentLoopData = $policyElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list--column__item">
                                <a href="<?php echo e(route('policy.pages', [slug($policy->data_values->title), $policy->id])); ?>" class="t-link t-link--base text--white d-inline-block">
                                    <?php echo e(strLimit(__(@$policy->data_values->title), 25)); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6  col-xxl-3">
                    <h5 class="mt-0 text--white"><?php echo app('translator')->get('Contact Us'); ?></h5>
                    <hr class="footer-hr">
                    <ul class="list list--column">
                        <?php $__currentLoopData = $contactElements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list--column__item">
                                <div class="contact-card">
                                    <div class="contact-card__icon">
                                        <?php echo @$contact->data_values->icon ?>
                                    </div>
                                    <div class="contact-card__content">
                                        <p class="text--white mb-0">
                                            <?php echo e(__(@$contact->data_values->details)); ?>

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

    <div class="footer__copyright py-3">
        <p class="mb-0 sm-text text--white text-center">
            <?php echo app('translator')->get('Copyright'); ?> &copy; <?php echo e(date('Y')); ?>. <?php echo app('translator')->get('All Rights Reserved'); ?>
        </p>
    </div>

</footer>
<?php /**PATH C:\xampp\htdocs\Files\core\resources\views/templates/basic/partials/footer.blade.php ENDPATH**/ ?>