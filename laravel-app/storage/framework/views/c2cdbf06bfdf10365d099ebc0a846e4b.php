


<?php $__env->startSection('main'); ?>
    <main class="text-center w-50 mx-auto py-5 my-5
    bg-dark text-light rounded border">
        <h2> Home Page </h2>
        <hr class="w-25 mx-auto my-2">
        <a href="<?php echo e(route('events')); ?>" class="btn btn-light mt-3">Show All Events</a>
    </main>    
<?php $__env->stopSection(); ?>







<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tawfik\Desktop\laravel-app\resources\views/pages/index.blade.php ENDPATH**/ ?>