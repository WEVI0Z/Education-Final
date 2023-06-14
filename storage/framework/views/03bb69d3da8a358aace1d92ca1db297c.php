<?php $__env->startSection("content"); ?>
    <style>
        .profile {
            width: 350px;
            margin: auto;
        }

        .profile__item {
            display: flex;
            justify-content: space-between;
        }

        .profile__name {
            text-decoration: underline;
        }

        .profile__data {
        }

        .stats__list {
            padding-left: 20px;
        }

        .stats__item {
            margin-bottom: 10px;
            position: relative;
        }

        .stats__item::before {
            content: "";
            position: absolute;
            top: 9px;
            left: -18px;
            width: 15px;
            height: 0;
            border-bottom: 1px solid;
        }

        .stats__doc {
            display: inline;
            color: blue;
        }
    </style>

    <section class="profile">
        <h2 class="profile__title">
            <?php echo e($title); ?>

        </h2>
        <ul class="profile__list">
            <li class="profile__item">
                <p class="profile__name">ФИО:</p>
                <p class="profile__data"><?php echo e($user->full_name); ?></p>
            </li>
            <li class="profile__item">
                <p class="profile__name">Логин:</p>
                <p class="profile__data"><?php echo e($user->login); ?></p>
            </li>
            <li class="profile__item">
                <p class="profile__name">Почта:</p>
                <p class="profile__data"><?php echo e($user->email); ?></p>
            </li>
        </ul>

        <p class="stats__title">
            Последняя статистика:
        </p>

        <ul class="stats__list">
            <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="stats__item">Просмотрел/a <a href="<?php echo e(asset($stat->document->path)); ?>" class="stats__doc"> <?php echo e($stat->document->name); ?></a> <?php echo e($stat->created_at->diffForHumans()); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\help\resources\views/users/profile.blade.php ENDPATH**/ ?>