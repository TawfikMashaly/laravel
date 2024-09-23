
<nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <strong> <i class="fa-brands fa-laravel"></i> Laravel Project </strong>
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
          <a class="nav-link" href="<?php echo e(url('/events')); ?>">Event</a>
          <a class="nav-link" href="<?php echo e(route('create')); ?>">Create Event</a>
        </div>
      </div>
    </div>
</nav><?php /**PATH C:\Users\Tawfik\Desktop\laravel-app\resources\views/includes/navbar.blade.php ENDPATH**/ ?>