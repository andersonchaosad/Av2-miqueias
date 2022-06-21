<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Dados do torcedor - Editar</h1>
    <form action="<?php echo e(route('fans.update', $fan->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="row">
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Email</label>
                <input name="email" class="form-control" type="email" value="<?php echo e($fan->email); ?>"
                    aria-label=" input example">
            </div>
            <div class="col-12 mb-2 form-group">
                <label for="inputPassword2" class="mb-2">Primeiro Nome</label>
                <input name="firstname" class="form-control" type="text" value="<?php echo e($fan->firstname); ?>"
                    aria-label=" input example">
            </div>
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Último Nome</label>
                <input name="lastname" class="form-control" type="text" value="<?php echo e($fan->lastname); ?>"
                    aria-label=" input example">
            </div>
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Telefone</label>
                <input name="phonenumber" class="form-control" type="text" value="<?php echo e($fan->phonenumber); ?>"
                    aria-label=" input example">
            </div>
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Data Nascimento</label>
                <input name="borndate" class="form-control" type="date" value="<?php echo e($fan->borndate); ?>"
                    aria-label=" input example">
            </div>
        </div>


        <a href="<?php echo e(route('fans.show', $fan)); ?>" class="btn btn-danger btn-sm">
            Cancelar
        </a>
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/fans/edit-fan.blade.php ENDPATH**/ ?>