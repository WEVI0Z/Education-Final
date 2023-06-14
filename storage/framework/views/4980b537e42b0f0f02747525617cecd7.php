<?php $__env->startSection("content"); ?>
    <style>
        .docs {
            max-width: 1200px;
            margin: auto;
            display: flex;
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
            Документы:
        </h2>

        <ul class="docs__list">
            <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="docs__item doc">
                    <h3 class="doc__title"><?php echo e($document->name); ?></h3>
                    <p class="doc__type"><?php echo e($document->category); ?></p>
                    <div class="doc__buttons">
                        <a href="<?php echo e(asset($document->path)); ?>" class="doc__button button">Открыть</a>
                        <a href="<?php echo e(route("admin-edit", ["id" => $document->id])); ?>" class="doc__button button">Изменить</a>
                        <a href="<?php echo e(route("admin-delete", ["id" => $document->id])); ?>" class="doc__button button">Удалить</a>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <a style="margin-bottom:10px; font-size: 20px; font-weight: 700;" href="<?php echo e(route("admin-create")); ?>" class="docs__button button">Создать новый</a>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\help\resources\views/admin/documents.blade.php ENDPATH**/ ?>