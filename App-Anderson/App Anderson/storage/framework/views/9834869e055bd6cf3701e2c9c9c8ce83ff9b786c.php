<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Dados do torcedor</h1>
    <div class="row">
        <div class="col-12 mb-2">
            <label for="staticEmail2" class="mb-2">Email</label>
            <input class="form-control" type="text" value="<?php echo e($fan->email); ?>" aria-label="readonly input example" readonly>
        </div>
        <div class="col-12 mb-2 form-group">
            <label for="inputPassword2" class="mb-2">Primeiro Nome</label>
            <input class="form-control" type="text" value="<?php echo e($fan->firstname); ?>"
                aria-label="readonly input example"readonly>
        </div>
        <div class="col-12 mb-2">
            <label for="staticEmail2" class="mb-2">Último Nome</label>
            <input class="form-control" type="text" value="<?php echo e($fan->lastname); ?>" aria-label="readonly input example"
                readonly>
        </div>
        <div class="col-12 mb-2">
            <label for="staticEmail2" class="mb-2">Telefone</label>
            <input class="form-control" type="text" value="<?php echo e($fan->phonenumber); ?>" aria-label="readonly input example"
                readonly>
        </div>
        <div class="col-12 mb-2">
            <label for="staticEmail2" class="mb-2">Data Nascimento</label>
            <input class="form-control" type="date" value="<?php echo e($fan->borndate); ?>" aria-label="readonly input example"
                readonly>
        </div>
    </div>

    <form action="<?php echo e(route('fans.destroy', $fan->id)); ?>" method="POST">
        <a href="<?php echo e(route('fans.edit', $fan)); ?>" class="btn btn-primary">
            Editar
        </a>
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/fans/show-fan.blade.php ENDPATH**/ ?>