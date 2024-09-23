

<?php $__env->startSection('main'); ?>
    <section class="container my-5">
        <div class="text-light bg-dark py-4 w-50 mx-auto my-4 text-center">
            <h2> Edit Events </h2>
        </div>
        
        <div class="w-50 mx-auto my-4">
            <form action="<?php echo e('/events/' . $event->id . '/update'); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="form-group my-2">
                    <label for="title">Event Title</label>
                    <input type="text" class="form-control" 
                    id="title" name="title" value="<?php echo e($event->title); ?>">
                </div>
                <div class="form-group my-2">
                    <label for="price">Event Price</label>
                    <input type="number" class="form-control" 
                    id="price" name="price" value="<?php echo e($event->price); ?>">
                </div>
                <div class="form-group my-2">
                    <label for="speaker">Event Speaker</label>
                    <input type="text" class="form-control" 
                    id="speaker" name="speaker" value="<?php echo e($event->speaker); ?>">
                </div>
                <div class="form-group my-2">
                    <label for="description">Event Description</label>
                    <textarea class="form-control" name="description" 
                    id="description">
                    <?php echo e($event->description); ?>

                    </textarea>
                </div>

                <input type="submit" value="Edit Event" class="btn btn-success mt-2">
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Tawfik\Desktop\laravel-app\resources\views/pages/edit.blade.php ENDPATH**/ ?>