<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Atendente</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/atendente/cruds/store')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('cpf') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Cpf</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="cpf" value="<?php echo e(old('cpf')); ?>">

                                <?php if($errors->has('cpf')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('cpf')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('nascimento') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Nascimento</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="nascimento" value="<?php echo e(old('nascimento')); ?>">

                                <?php if($errors->has('nascimento')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nascimento')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('sexo') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Sexo</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="sexo" value="<?php echo e(old('sexo')); ?>">

                                <?php if($errors->has('sexo')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('sexo')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('salario') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Salario</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="salario" value="<?php echo e(old('salario')); ?>">

                                <?php if($errors->has('salario')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('salario')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('telefone') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Telefone</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="telefone" value="<?php echo e(old('telefone')); ?>">

                                <?php if($errors->has('telefone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('telefone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('endereco') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Endereco</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="endereco" value="<?php echo e(old('endereco')); ?>">

                                <?php if($errors->has('endereco')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('endereco')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>