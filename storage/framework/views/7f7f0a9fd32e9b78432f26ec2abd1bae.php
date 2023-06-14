<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title><?php echo e($title ?? "ЭСО"); ?></title>
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Montserrat', sans-serif;
        display: flex;
        height: 100vh;
        flex-direction: column;
    }

    main {
        flex-grow: 1;
    }

    a {
        display: block;

        color: black;
        text-decoration: none;
        transition: all 0.5s ease-out;
    }

    a:hover, a:focus {
        text-decoration: underline;
        transform: translateY(-10%);
    }

    a:active {
        opacity: 0.7;
    }

    ul {
        padding: 0;

        list-style-type: none;
    }

    .button {
        padding: 10px;
        display: block;

        background-color: mintcream;
        border-radius: 10px;
        transition: all 0.5s ease-out;
        border: none;
    }

    .button:hover, .button:focus {
        text-decoration: none;
        transform: scale(1.1);
        cursor: pointer;
    }

    .button:active {
        opacity: 0.7;
    }
</style>

<body>
    <?php echo $__env->make("layouts.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make("layouts.alerts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="main">
        <?php echo $__env->yieldContent("content"); ?>
    </main>

    <?php echo $__env->make("layouts.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\help\resources\views/layouts/layout.blade.php ENDPATH**/ ?>