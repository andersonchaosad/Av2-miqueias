<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Cadastrar</h1>
    <form action="<?php echo e(route('fans.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>

        <div class="row">
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Email</label>
                <input name="email" class="form-control" type="email" placeholder="Email" aria-label=" input example">
            </div>
            <div class="col-12 mb-2 form-group">
                <label for="inputPassword2" class="mb-2">Primeiro Nome</label>
                <input name="firstname" class="form-control" type="text" placeholder="Primeiro nome"
                    aria-label=" input example">
            </div>
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Último Nome</label>
                <input name="lastname" class="form-control" type="text" placeholder="Último nome"
                    aria-label=" input example">
            </div>
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Telefone</label>
                <input name="phonenumber" class="form-control" type="text" placeholder="Telefone"
                    aria-label=" input example">
            </div>
            <div class="col-12 mb-2">
                <label for="staticEmail2" class="mb-2">Data Nascimento</label>
                <input name="borndate" class="form-control" type="date" placeholder="borndate"
                    aria-label=" input example">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/fans/add-fan.blade.php ENDPATH**/ ?>