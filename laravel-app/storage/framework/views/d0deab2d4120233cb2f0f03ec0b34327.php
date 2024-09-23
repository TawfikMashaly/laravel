

<?php $__env->startSection('main'); ?>
    <section class="container my-5">
        <div class="text-light bg-dark py-4 w-50 mx-auto my-4 text-center">
            <h2> Event Details </h2>
        </div>
        
        <div class="w-50 mx-auto">
            <div class="card text-center">
                <div class="card-header">
                  <?php echo e($event->title); ?>

                </div>
                <div class="card-body">
                    <h5 class="card-title">Event Price : <?php echo e($event->price); ?></h5>
                    <p class="card-text">
                        <?php echo e($event->description); ?>

                    </p>
                    <hr>
                    <div class="alert alert-info p-3 m-2">
                        Created at : <?php echo e($event->created_at); ?><br>
                        by : <strong class="text-secondary"><?php echo e($event->speaker); ?></strong>
                    </div>
                    <hr>
                    <a href="<?php echo e(url('/events')); ?>" class="btn btn-primary">Events</a>
                </div>
              </div>
        </div>
       
    </section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tawfik\Desktop\laravel-app\resources\views/pages/show.blade.php ENDPATH**/ ?>