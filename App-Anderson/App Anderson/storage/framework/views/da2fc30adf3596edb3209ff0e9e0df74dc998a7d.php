<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $fans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($fan->id); ?></th>
                    <td scope="row"><?php echo e($fan->firstname . ', ' . $fan->lastname); ?></td>
                    <td scope="row"><?php echo e($fan->email); ?></td>
                    <td scope="row" style="max-width: 40px">
                        <a href="<?php echo e(route('fans.show', $fan)); ?>" class="btn btn-primary btn-sm">
                            Mais
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/fans/index.blade.php ENDPATH**/ ?>