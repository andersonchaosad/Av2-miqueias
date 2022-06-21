<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <meta http-equiv="content-language" content="pt-BR">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title><?php echo $__env->yieldContent('title', 'Ceará Sporting Club'); ?></title>

    <?php $__env->startSection('navbar'); ?>
    <?php echo $__env->yieldSection(); ?>


</head>

<body>
    <div class="container"
        style="border-radius: 15px; margin-top: 100px; padding: 20px; -webkit-box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.43); box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.43);">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>

</html>
<?php /**PATH /var/www/html/resources/views/layouts/base.blade.php ENDPATH**/ ?>