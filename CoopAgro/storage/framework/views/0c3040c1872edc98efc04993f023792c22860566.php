 <?php $__env->startSection('content'); ?>
	<div class="container">
		 <h1>Editar teste: <?php echo e($teste->id); ?></h1>

		 <?php if($errors->any()): ?>
	 		<ul class="alert alert-warning">
	 			<?php foreach($errors->all() as $error): ?>
	 				<li><?php echo e($error); ?></li>
	 			<?php endforeach; ?>
	 		</ul>
		 <?php endif; ?>

		<?php echo Form::open(['route'=>['teste.update', $teste->id], 'method'=>'put']); ?>



		<!-- Descricao Form Input -->

	 	<div class="form-group">
			 <?php echo Form::label('descricao', 'Descricao:'); ?>

			 <?php echo Form::textarea('descricao', $teste->descricao, ['class'=>'form-cont\rol']); ?>

	 	</div>

	 	<div class="form-group">
	 		<?php echo Form::submit('Salvar teste', ['class'=>'btn btn-primary']); ?>

	 	</div>

		 <?php echo Form::close(); ?>


	 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>