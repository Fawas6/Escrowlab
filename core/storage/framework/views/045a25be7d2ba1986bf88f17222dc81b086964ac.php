<header class="header-fixed header--primary">
    <div class="container">
        <div class="row g-0 align-items-center">
            <div class="col-6 col-lg-2">
                <a href="<?php echo e(route('home')); ?>" class="logo">
                    <img src="<?php echo e(getImage('assets/images/logoIcon/logo.png')); ?>" alt="<?php echo app('translator')->get('image'); ?>" class="img-fluid logo__is">
                </a>
            </div>
            <div class="col-6 col-lg-10">
                <div class="nav-container">
                    
                    <?php if($general->multi_language): ?>
                        <div class="form--select-transprant me-3 d-xl-none d-block">
                            <select class="form-select form--select-sm langSel">
                                <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($lang->code); ?>" <?php if(session('lang') == $lang->code): ?> selected <?php endif; ?>>
                                        <?php echo e(__($lang->name)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    <?php endif; ?>
                    <!-- Navigation Toggler  -->
                    <div class="d-flex justify-content-end align-items-center d-xl-none">
                        <button type="button" class="btn p-0 nav--toggle header-button text-white">
                            <i class="las la-bars"></i>
                        </button>
                    </div>
                    <!-- Navigation Toggler End -->

                    <!-- Navigation  -->
                    <nav class="navs">
                        <!-- Primary Menu  -->
                        <div class="header-menu">
                            <ul class="list primary-menu primary-menu--alt">
                                <li class="primary-menu__list">
                                    <a href="<?php echo e(route('home')); ?>" class="primary-menu__link"><?php echo app('translator')->get('Home'); ?></a>
                                </li>

                                <?php if((auth()->user() && request()->routeIs('user.*')) || (auth()->user() && request()->routeIs('ticket*'))): ?>

                                    <li class="primary-menu__list has-sub">
                                        <a href="javascript:void(0)" class="primary-menu__link"><?php echo app('translator')->get('Deposit'); ?></a>

                                        <ul class="primary-menu__sub">
                                            <li class="primary-menu__sub-list">
                                                <a href="<?php echo e(route('user.deposit.index')); ?>" class="t-link primary-menu__sub-link"><?php echo app('translator')->get('Deposit Now'); ?></a>
                                            </li>
                                            <li class="primary-menu__sub-list">
                                                <a href="<?php echo e(route('user.deposit.history')); ?>" class="t-link primary-menu__sub-link"><?php echo app('translator')->get('Deposit Log'); ?></a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="primary-menu__list has-sub">
                                        <a href="javascript:void(0)" class="primary-menu__link">
                                            <?php echo app('translator')->get('Escrow'); ?>
                                        </a>

                                        <ul class="primary-menu__sub">
                                            <li class="primary-menu__sub-list">
                                                <a href="<?php echo e(route('user.escrow.step.one')); ?>" class="t-link primary-menu__sub-link">
                                                    <?php echo app('translator')->get('New Escrow'); ?>
                                                </a>
                                            </li>
                                            <li class="primary-menu__sub-list">
                                                <a href="<?php echo e(route('user.escrow.index')); ?>" class="t-link primary-menu__sub-link">
                                                    <?php echo app('translator')->get('All Escrow'); ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="primary-menu__list has-sub">
                                        <a href="javascript:void(0)" class="primary-menu__link"><?php echo app('translator')->get('Withdraw'); ?></a>

                                        <ul class="primary-menu__sub">
                                            <li class="primary-menu__sub-list">
                                                <a href="<?php echo e(route('user.withdraw')); ?>" class="t-link primary-menu__sub-link"><?php echo app('translator')->get('Withdraw Now'); ?></a>
                                            </li>
                                            <li class="primary-menu__sub-list">
                                                <a href="<?php echo e(route('user.withdraw.history')); ?>" class="t-link primary-menu__sub-link"><?php echo app('translator')->get('Withdrawal Log'); ?></a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="primary-menu__list">
                                        <a href="<?php echo e(route('user.transactions')); ?>" class="primary-menu__link"><?php echo app('translator')->get('Transactions'); ?></a>
                                    </li>

                                    <li class="primary-menu__list has-sub">
                                        <a href="javascript:void(0)" class="primary-menu__link"><?php echo e(auth()->user()->username); ?></a>

                                        <ul class="primary-menu__sub">
                                            <li class="primary-menu__sub-list">
                                                <a href="<?php echo e(route('ticket.index')); ?>" class="t-link primary-menu__sub-link"><?php echo app('translator')->get('Support Tickets'); ?></a>
                                            </li>
                                            <li class="primary-menu__sub-list">
                                                <a href="<?php echo e(route('ticket.open')); ?>" class="t-link primary-menu__sub-link"><?php echo app('translator')->get('Open New Ticket'); ?></a>
                                            </li>
                                            <li class="primary-menu__sub-list">
                                                <a href="<?php echo e(route('user.change.password')); ?>" class="t-link primary-menu__sub-link"><?php echo app('translator')->get('Change Password'); ?></a>
                                            </li>
                                            <li class="primary-menu__sub-list">
                                                <a href="<?php echo e(route('user.profile.setting')); ?>" class="t-link primary-menu__sub-link"><?php echo app('translator')->get('Profile Setting'); ?></a>
                                            </li>
                                            <li class="primary-menu__sub-list">
                                                <a href="<?php echo e(route('user.twofactor')); ?>" class="t-link primary-menu__sub-link"><?php echo app('translator')->get('2FA Security'); ?></a>
                                            </li>
                                            <li class="primary-menu__sub-list">
                                                <a href="<?php echo e(route('user.logout')); ?>" class="t-link primary-menu__sub-link"><?php echo app('translator')->get('Logout'); ?></a>
                                            </li>
                                        </ul>
                                    </li>
                                <?php else: ?>
                                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="primary-menu__list">
                                            <a href="<?php echo e(route('pages', [$data->slug])); ?>" class="primary-menu__link"><?php echo e(__($data->name)); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <li class="primary-menu__list">
                                        <a href="<?php echo e(route('blogs')); ?>" class="primary-menu__link"><?php echo app('translator')->get('Blogs'); ?></a>
                                    </li>

                                    <li class="primary-menu__list">
                                        <a href="<?php echo e(route('contact')); ?>" class="primary-menu__link"><?php echo app('translator')->get('Contact'); ?></a>
                                    </li>
                                <?php endif; ?>
                                <?php if($general->multi_language): ?>
                                    <li class="primary-menu__list text-center d-xl-block d-none">
                                        <div class="form--select-transprant d-flex align-items-center ms-xxl-5 ms-xl-4">
                                            <select class="form-select form--select-sm langSel">
                                                <?php $__currentLoopData = $language; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($lang->code); ?>" <?php if(session('lang') == $lang->code): ?> selected <?php endif; ?>>
                                                        <?php echo e(__($lang->name)); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </li>
                                <?php endif; ?>
                                <?php if(auth()->guard()->guest()): ?>
                                    <li class="primary-menu__list">
                                        <a href="<?php echo e(route('user.login')); ?>" class="btn btn-base--outline "><?php echo app('translator')->get('Login'); ?></a>
                                        <a href="<?php echo e(route('user.register')); ?>" class="btn btn--md btn--base  ms-3"><?php echo app('translator')->get('Join Now'); ?></a>
                                    </li>
                                <?php else: ?>
                                    <li class="primary-menu__list">
                                        <a href="<?php echo e(route('user.home')); ?>" class="btn btn--md btn-base--outline "><?php echo app('translator')->get('Dashboard'); ?></a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <!-- User Login End -->
                    </nav>
                    <!-- Navigation End -->
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\Files\core\resources\views/templates/basic/partials/header.blade.php ENDPATH**/ ?>