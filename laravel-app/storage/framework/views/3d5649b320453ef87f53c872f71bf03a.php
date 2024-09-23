

<?php $__env->startSection('main'); ?>
    <section class="container my-5">
        <div class="text-light bg-dark py-4 w-50 mx-auto my-4 text-center">
            <h2> All Events </h2>
        </div>
        
        <?php if(count($events) > 0): ?>
            <div class="row text-center my-2">
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col col-lg-4 col-md-6 col-sm-12 my-3">
                        <div class="card text-bg-light mb-3" 
                        style="max-width: 21rem;">
                            <div class="card-header">
                                <?php echo e($event->title); ?>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    Event Price : <?php echo e($event->price); ?>

                                </h5>
                                <p class="card-text">
                                    <?php echo e($event->description); ?>

                                </p>
                                <hr>
                                <div class="alert alert-info p-3 m-2">
                                    Created at : <?php echo e($event->created_at); ?><br>
                                    by : <strong class="text-secondary"><?php echo e($event->speaker); ?></strong>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-center">
                                    <a href="<?php echo e('/events/' . $event->id); ?>" 
                                        class="btn btn-primary mx-1 my-2">Show</a>
                                    <a href="<?php echo e('/events/' . $event->id . '/edit'); ?>" 
                                        class="btn btn-success mx-1 my-2">Edit</a>
                                    <form class="mx-1 my-2" method="POST" action="<?php echo e(route('delete' , ['id' => $event->id])); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                          </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
        
        <div class="d-flex justify-content-center my-4">
            <?php echo e($events->links()); ?>

        </div>
    </section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tawfik\Desktop\laravel-app\resources\views/pages/events.blade.php ENDPATH**/ ?>