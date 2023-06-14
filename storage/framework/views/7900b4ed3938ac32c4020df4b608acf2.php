<?php $__env->startSection("content"); ?>
    <style>
        .info {
            max-width: 1200px;
            margin: 40px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .info__left {
            display: flex;
            max-width: 600px;
            padding: 0 20px;

            flex-direction: column;
            align-items: flex-start;
        }

        .info__right {
            max-width: 500px;
            padding: 0 20px;
        }

        .info__description {
            font-size: 20px;
        }

        .stats__list {
            margin-top: 40px;
            padding-left: 20px;
        }

        .stats__title {
            margin-bottom: 0;
        }

        .stats__item {
            margin-bottom: 10px;
            position: relative;
            font-size: 18px;
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

        .docs__label {
            font-size: 20px;
            position: relative;
        }

        .docs__input:focus {
            outline: none;
        }

        .docs__input {
            padding-left: 20px;
            margin: 10px 0;

            font-size: 18px;

            border: none;
            font-family: 'Montserrat', sans-serif;
            border-bottom: 1px solid black;
        }

        .docs__label::before {
            content: "";
            width: 20px;
            height: 20px;
            position: absolute;
            top: 12px;
            left: 0;

            background-size: contain;
            background-image: url(<?php echo e(asset("img/search.svg")); ?>);
        }

        .docs__main {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>

    <section class="info">
        <div class="info__left">
            <h2 class="info__title">
                Современные системы программирования
            </h2>
            <p class="info__description">
                Учебный предмет “Современнные системы программирования” ориентирован на обучение базовым знаниям, умениям и навыкам в области программирования. Изучаемые темы базируются на использовании технологий,новейшего программного обеспечения и технического обеспечения компьютеров
            </p>
            <a href="<?php echo e(asset("files/Cовременные системы программирования, 2021.pdf")); ?>" class="info__button button">
                Узнать больше о предмете
            </a>
        </div>
        <div class="info__right">
            <h2 class="stats__title">
                Последняя активность на ресурсе:
            </h2>

            <ul class="stats__list">
                <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="stats__item">
                        <a href="<?php echo e(route("profile", ["id" => $stat->user_id])); ?>" class="stats__profile"><?php echo e($stat->user->full_name); ?></a> просмотрел/a <a href="<?php echo e(asset(\App\Models\Document::query()->find($stat->document_id)->path)); ?>" class="stats__doc"> <?php echo e(\App\Models\Document::query()->find($stat->document_id)->name); ?></a> <?php echo e($stat->created_at->diffForHumans()); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </section>

    <section class="docs">
        <div class="docs__main">
            <h2 class="docs__title">
                Последние опубликованные документы:
            </h2>
        </div>

        <?php if(count($documents)): ?>
            <ul class="docs__list">
                <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="docs__item doc">
                        <h3 class="doc__title"><?php echo e($document->name); ?></h3>
                        <p class="doc__date"><?php echo e($document->created_at); ?></p>
                        <p class="doc__type"><?php echo e($document->category); ?></p>
                        <div class="doc__buttons">
                            <a href="<?php echo e(route("open", ["id" => $document->id])); ?>" class="doc__button button">Открыть</a>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php else: ?>
            <p class="docs__span">
                Документов пока не было добавлено
            </p>
        <?php endif; ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\help\resources\views/main.blade.php ENDPATH**/ ?>