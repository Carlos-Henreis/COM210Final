<?php $__env->startSection('content'); ?>
	<div class="container">
 		<h1>Testes</h1>

 		<a href="<?php echo e(route('teste.create')); ?>" class="btn btn-default">Novo teste</a>
 		<br />
 		<br />
 		<table class="table table-striped table-bordered table-hover">
	 		<thead>
	 		<tr>
	 			<th>ID</th>
	 			<th>Descrição</th>
	 			<th>Ação</th>
	 		</tr>
	 		</thead>
	 		<tbody>

	 		<?php foreach($teste as $teste): ?>
	 		<tr>
				 <td><?php echo e($teste->id); ?></td>
				 <td><?php echo e($teste->descricao); ?></td>
				 <td>
				 <a href="<?php echo e(route('teste.edit',['id'=>$teste->id])); ?>" class="btn-sm btn-success">Editar</a>
				 <a href="<?php echo e(route('teste.destroy',['id'=>$teste->id])); ?>" class="btn-sm btn-danger">Remover</a>
				 </td>
	 		</tr>
	 		<?php endforeach; ?>

	 		</tbody>
 		</table>
 	</div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>