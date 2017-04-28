<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">
<h4>CREATE</h4>

<?php echo Form::open(['route'=>'home.store']); ?>

	<?php echo Form::text('tahun', null, ['placeholder' => 'Masukkan Tahun']); ?>

    <?php echo Form::text('angkot', null, ['placeholder' => 'Masukkan Data Angkot']); ?>

    <?php echo Form::text('bus', null, ['placeholder' => 'Masukkan Data Bis']); ?>

	<?php echo Form::text('truk', null, ['placeholder' => 'Masukkan Data Truk']); ?>

    <?php echo Form::text('spdamtr', null, ['placeholder' => 'Masukkan Data Sepeda Motor']); ?>

	<?php echo Form::submit('Simpan'); ?>

<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
</div></div></div></div></div>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>