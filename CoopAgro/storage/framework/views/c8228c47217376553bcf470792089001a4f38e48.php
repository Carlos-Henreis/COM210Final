<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Editar dados do(a) atendente: <?php echo e($atendente->name); ?></h1>
        
        <?php if($errors->any()): ?>
            <ul class="alert alert-warning">
                <?php foreach($errors->all() as $error): ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        
        <?php echo Form::open(['route'=>['atendente.cruds.update', $atendente->id], 'method' => 'put']); ?>

        <div class="form-group">
            <?php echo Form::label('name', 'Nome:'); ?>

            <?php echo Form::text('name', $atendente->name, ['class'=>'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('cpf', 'CPF:'); ?>

            <?php echo Form::text('cpf', $atendente->cpf, ['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('nascimento', 'Data de nascimento:'); ?>

            <?php echo Form::text('nascimento', $atendente->nascimento, ['class'=>'form-control']); ?>

        </div>

        <div class="form-group">
            <?php echo Form::label('endereco', 'Endereço:'); ?>

            <?php echo Form::text('endereco', $atendente->endereco, ['class'=>'form-control']); ?>

        </div>
        
        <div class="form-group">
            <?php echo Form::label('telefone', 'Telefone:'); ?>

            <?php echo Form::text('telefone', $atendente->telefone, ['class'=>'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('email', 'E-mail:'); ?>

            <?php echo Form::text('email', $atendente->email, ['class'=>'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::submit('Salvar', ['class'=>'btn btn-primary']); ?>

        </div>
        
        <?php echo Form::close(); ?>

        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>