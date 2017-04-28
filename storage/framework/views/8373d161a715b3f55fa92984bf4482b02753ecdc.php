<?php $__env->startSection('content'); ?>

    <div class="container">
    <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">

<table class="table table-striped">
	<thead>
		<tr>
			<th>Tahun</th>
			<th>Angkot</th>
			<th>Bus</th>
			<th>Truk</th>
			<th>Sepeda Motor</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicles): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><?php echo e($vehicles->tahun); ?></td>
			<td><?php echo e($vehicles->angkot); ?></td>
			<td><?php echo e($vehicles->bus); ?></td>
			<td><?php echo e($vehicles->truk); ?></td>
			<td><?php echo e($vehicles->spdamtr); ?></td>
			<td>
				<form method="POST" action="<?php echo e(route('home.destroy', $vehicles->id)); ?>" accept-charset="UTF-8">
	                <input name="_method" type="hidden" value="DELETE">
	                <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
	              	<a href="<?php echo e(route('home.edit', $vehicles->id)); ?>" type="submit" button type="button" class="btn btn-warning">Edit</a>
	                <input onclick="return confirm('Anda yakin akan menghapus data ?');" type="submit" button type="button" class="btn btn-danger" value="Hapus" />
	            </form>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</tbody>
</table>
<a href="<?php echo e(route('home.create')); ?>" button type="button" class="btn btn-info">Create</a></button>
</div></div></div></div></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>