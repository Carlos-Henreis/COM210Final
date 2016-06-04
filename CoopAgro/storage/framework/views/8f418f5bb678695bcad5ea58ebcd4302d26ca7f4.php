<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Dados dos Atendentes e ações</h1>
    <a href="<?php echo e(route('atendente.cruds.create')); ?>" class="btn btn-default">Cadastrar Atendente</a>
    <br />
    <br />
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($atendente as $atendente): ?>
            <tr>
                <td><?php echo e($atendente->id); ?></td>
                <td><?php echo e($atendente->name); ?></td>
                <td><?php echo e($atendente->cpf); ?></td>
                <td>
                    <a href="<?php echo e(route('atendente.cruds.edit',['id'=>$atendente->id])); ?>" class="btn-sm btn-success">Editar</a>
                    <a href="<?php echo e(route('atendente.cruds.destroy',['id'=>$atendente->id])); ?>" class="btn-sm btn-danger">Remover</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>