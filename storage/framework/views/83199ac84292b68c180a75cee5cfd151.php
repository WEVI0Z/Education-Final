<style>
    .alerts {
        width: 350px;
        margin: 20px auto;
        padding: 20px;
        background-color: mintcream;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        border-radius: 10px;
    }

    .alerts__list {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .alerts__error {
        color: red;
    }
</style>

<?php if($errors->any()): ?>
    <div class="alerts">
        <ul class="alerts__list">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="alerts__error"><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(session("message")): ?>
    <div class="alerts">
        <p class="alerts__message"><?php echo e(session("message")); ?></p>
    </div>
<?php endif; ?>

<?php if(session("error")): ?>
    <div class="alerts">
        <p class="alerts__error"><?php echo e(session("error")); ?></p>
    </div>
<?php endif; ?>
<?php /**PATH C:\OSPanel\domains\help\resources\views/layouts/alerts.blade.php ENDPATH**/ ?>