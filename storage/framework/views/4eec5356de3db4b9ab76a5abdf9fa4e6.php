<?php $__env->startSection("content"); ?>
    <style>
        .stats {
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: flex-start;
            flex-direction: column;
        }

        .stats__list {
            padding-left: 20px;
        }

        .stats__title {
            margin-bottom: 0;
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
    </style>
    <section class="stats">
        <h2 class="stats__title">
            Cтатистика:
        </h2>

        <ul class="stats__list">
            <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="stats__item">
                    <a href="<?php echo e(route("profile", ["id" => $stat->user_id])); ?>" class="stats__profile"><?php echo e($stat->user->full_name); ?></a> просмотрел/a <a href="<?php echo e(asset(\App\Models\Document::query()->find($stat->document_id)->path)); ?>" class="stats__doc"> <?php echo e(\App\Models\Document::query()->find($stat->document_id)->name); ?></a>  <?php echo e($stat->created_at->diffForHumans()); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\help\resources\views/admin/stats.blade.php ENDPATH**/ ?>