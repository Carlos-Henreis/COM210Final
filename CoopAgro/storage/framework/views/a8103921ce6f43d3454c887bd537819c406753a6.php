<?php $__env->startSection('content'); ?>
	<div class="container">
		<h1>novo teste</h1>

 		
		 <?php echo Form::open(['route'=>'teste.store']); ?>



		 <!-- Descricao Form Input -->

		<div class="form-group">
 			<?php echo Form::label('descricao', 'Descrição:'); ?>

 			<?php echo Form::textarea('descricao',  null, ['class'=>'form-control']); ?>

 		</div>

 		<div class="form-group">
	 		<?php echo Form::submit('Criar teste', ['class'=>'btn btn-primary']); ?>

 		</div>

 		<?php echo Form::close(); ?>


	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>