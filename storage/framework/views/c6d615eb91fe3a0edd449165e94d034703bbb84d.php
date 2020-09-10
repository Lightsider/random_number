<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Main page')); ?></div>

                    <div class="card-body">
                        <p>Hello!</p>

                        <p>Here you can get a random number or see earlier numbers.</p>

                        <p>Of course, you have no other way to do this :)</p>
                        <?php if(Auth::check()): ?>
                            <a href="<?php echo e(route('home')); ?>">Go to home page and continue</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>">Go to login page and continue</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/welcome.blade.php ENDPATH**/ ?>