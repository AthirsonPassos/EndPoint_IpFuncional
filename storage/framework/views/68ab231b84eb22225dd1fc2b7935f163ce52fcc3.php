<?php $__env->startSection('cabecalho'); ?>
    Cadastrar Curriculo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

<?php if($errors->any()): ?>
      <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
       </div>
<?php endif; ?>

    <form action="<?php echo e(route('adicionar_cadastro')); ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <?php echo csrf_field(); ?>
            <label for="nome" class="">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">

            <label for="email" class="">E-mail</label>
            <input type="text" class="form-control" name="email" id="email">

            <label for="telefone" class="">Telefone</label>
            <input type="text" class="form-control" name="telefone" id="telefone">

            <label for="endereco" class="">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco">

            <label for="curriculo" class="mt-3">Currículo</label>
            <input type="file" name="curriculo" id="curriculo">


</div>

<button class="btn btn-primary">Adicionar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mano_\Teste\cadastro-endpoint\resources\views/dados/create.blade.php ENDPATH**/ ?>