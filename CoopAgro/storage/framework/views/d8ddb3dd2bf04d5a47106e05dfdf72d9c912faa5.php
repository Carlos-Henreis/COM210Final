<?php $__env->startSection('content'); ?>
	<div class="container">
		<h1>Produtos</h1>
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Descrição</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($teste as $teste): ?>
					<tr>
						<td><?php echo e($teste->id); ?></td>
						<td><?php echo e($teste->descricao); ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>