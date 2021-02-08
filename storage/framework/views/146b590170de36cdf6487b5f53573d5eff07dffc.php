<?php $__env->startSection('cabecalho'); ?>
    Séries
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <a href="/dados/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        <?php $__currentLoopData = $dados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item"><?= $dado; ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mano_\Teste\cadastro-endpoint\resources\views/dados/index.blade.php ENDPATH**/ ?>