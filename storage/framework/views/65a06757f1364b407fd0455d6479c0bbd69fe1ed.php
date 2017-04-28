<?php $__env->startSection('content'); ?>
   
    <div class="container">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">

<h4>EDIT</h4>
<?php echo Form::model($vehicles, ['route'=>['home.update', $vehicles->id], 'method'=> 'PATCH']); ?>

	<?php echo Form::text('tahun', null); ?>

	<?php echo Form::text('angkot', null); ?>

	<?php echo Form::text('bus', null); ?>

    <?php echo Form::text('truk', null); ?>

    <?php echo Form::text('spdamtr', null); ?>

	<?php echo Form::submit('Ubah'); ?> 
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
      </div>
    </div></div></div></div>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>