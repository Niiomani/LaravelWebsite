<?php $__env->startSection('header'); ?>
  <nav>
    <ul class="nav nav-pills pull-right">
      <li role="presentation" class="active"><a href="#">Home</a></li>
      <li role="presentation"><a href="#">About</a></li>
      <li role="presentation"><a href="#">Contact</a></li>
    </ul>
  </nav>
  <h3 class="text-muted">My Laravel Website</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar-up'); ?>
  <h1>My Laravel Website</h1>
  <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
  <p><a class="btn btn-lg btn-success" href="/bootstrapweb" role="button">Sign up today</a></p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar-left'); ?>
  <h4>Judul 1</h4>
  <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

  <h4>Judul 2</h4>
  <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

  <h4>Judul 3</h4>
  <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar-right'); ?>
  <h4>Judul 4</h4>
  <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

  <h4>Judul 5</h4>
  <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

  <h4>Judul 6</h4>
  <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
  <p>&copy; 2017 My Laravel Website. All Rights Reserved</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>