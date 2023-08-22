<?php
    $categories = App\Models\Category::active()->get();
?>
<form action="<?php echo e(route('user.escrow.step.one.submit')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="row g-4">
        <div class="col-md-12">
            <div class="input-group h-50">
                <select name="type" class="input-group-text input-group-width bg-white pe-2 form--control" required>
                    <option value=""><?php echo app('translator')->get('Select One'); ?></option>
                    <option value="1" selected><?php echo app('translator')->get('I am Selling'); ?></option>
                    <option value="2"><?php echo app('translator')->get('I am Buying'); ?></option>
                </select>

                <select name="category_id" class="form-select form--control" required>
                    <option value=""><?php echo app('translator')->get('Select One'); ?></option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e(__($category->name)); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="input-group">
                <span class="input-group-text input-group-width bg-white"><?php echo app('translator')->get('For the Amount Of'); ?></span>
                <input type="number" step="any" class="form-control form--control" name="amount" required>
                <span class="input-group-text bg-white border-end"><?php echo e(__($general->cur_text)); ?></span>
            </div>
        </div>
    </div>

    <div class="mx-auto mt-4 hero-button">
        <button type="submit" class="btn btn--xl btn--base"><?php echo app('translator')->get('Go to Nigeria'); ?></button>
    </div>
</form>
<?php /**PATH C:\xampp\htdocs\Files\core\resources\views/templates/basic/partials/escrow_form.blade.php ENDPATH**/ ?>