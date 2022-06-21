<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="https://www.cearasc.com/media/img/brasao-ceara.png" height="40px" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo e(route('fans.index')); ?>">Torcedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo e(route('fans.create')); ?>">Cadastrar Torcedor</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /var/www/html/resources/views/components/navbar.blade.php ENDPATH**/ ?>