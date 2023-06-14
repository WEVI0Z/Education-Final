<?php $__env->startSection("content"); ?>
    <style>
        .stats {
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: flex-start;
            flex-direction: column;
            padding-bottom: 20px;
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

        .stats__profile {
            display: inline;
            color: blue;
        }

        .stats__doc {
            display: inline;
            color: blue;
        }

        .stats__button {
            font-size: 18px;
        }

        .docs {
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: flex-start;
            flex-direction: column;
        }

        .docs__item {
            position: relative;
            margin-bottom: 20px;
        }

        .doc {
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;

            border: 1px solid black;
            border-radius: 10px;
        }

        .doc__title {
            margin: 0;
        }

        .doc__date {
            margin: 0;
        }

        .doc__buttons {
            display: flex;
            flex-wrap: wrap;
        }

        .doc__button {
            margin-left: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .button {
            align-self: flex-start;
        }
    </style>

    <section class="docs">
        <h2 class="docs__title">
            Последние документы:
        </h2>

        <ul class="docs__list">
            <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="docs__item doc">
                    <h3 class="doc__title"><?php echo e($document->name); ?></h3>
                    <p class="doc__date"><?php echo e($document->created_at); ?></p>
                    <p class="doc__type"><?php echo e($document->category); ?></p>
                    <div class="doc__buttons">
                        <a href="<?php echo e(asset($document->path)); ?>" class="doc__button button">Открыть</a>
                        <a href="<?php echo e(route("admin-edit", ["id" => $document->id])); ?>" class="doc__button button">Изменить</a>
                        <a href="<?php echo e(route("admin-delete", ["id" => $document->id])); ?>" class="doc__button button">Удалить</a>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <a href="<?php echo e(route("admin-docs")); ?>" class="button">
            Показать все документы
        </a>
    </section>

    <section class="stats">
        <h2 class="stats__title">
            Последняя статистика:
        </h2>

        <ul class="stats__list">
            <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="stats__item">
                    <a href="<?php echo e(route("profile", ["id" => $stat->user_id])); ?>" class="stats__profile"><?php echo e($stat->user->full_name); ?></a> просмотрел/a <a href="<?php echo e(asset(\App\Models\Document::query()->find($stat->document_id)->path)); ?>" class="stats__doc"> <?php echo e(\App\Models\Document::query()->find($stat->document_id)->name); ?></a>  <?php echo e($stat->created_at->diffForHumans()); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <a href="<?php echo e(route("show-stats")); ?>" class="button">
            Показать всю статистику
        </a>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\help\resources\views/admin/panel.blade.php ENDPATH**/ ?>