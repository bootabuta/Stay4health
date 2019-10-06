<?php $__env->startSection('userDataContent'); ?>

<h1>Welcome <?php echo e(Auth::user()->name); ?></h1>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('userDataView.userData', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Projects\htdocs\Stay4Health\resources\views/user.blade.php ENDPATH**/ ?>