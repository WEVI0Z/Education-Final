<?php $__env->startSection("content"); ?>
    <style>
        .form {
            display: flex;
            flex-direction: column;
            width: 350px;
            margin: 30px auto;
            align-items: center;
        }

        .form__label {
            display: flex;
            font-size: 20px;
            flex-direction: column;
        }

        .form__input {
            margin: 10px 0;
            font-size: 18px;
            border: none;
            font-family: 'Montserrat', sans-serif;
            border-bottom: 1px solid black;
        }

        .form__input:focus {
            outline: none;
        }
        .form__submit {
            margin-top: 20px;
            padding: 10px 30px;
            font-size: 20px;
            font-family: 'Montserrat', sans-serif;
        }
    </style>

    <form action="<?php echo e(route("register")); ?>" method="post" class="form">
        <?php echo csrf_field(); ?>
        <label for="full_name" class="form__label">
            ФИО:
            <input type="text" name="full_name" id="full_name" class="form__input" placeholder="" value="<?php echo e(old("full-name")); ?>">
        </label>
        <label for="login" class="form__label">
            Логин:
            <input type="text" name="login" id="login" class="form__input" placeholder="" value="<?php echo e(old("login")); ?>">
        </label>
        <label for="email" class="form__label">
            Почта:
            <input type="email" name="email" id="email" class="form__input" placeholder="" value="<?php echo e(old("email")); ?>">
        </label>
        <label for="password" class="form__label">
            Пароль:
            <input type="password" name="password" id="password" class="form__input" placeholder="" value="">
        </label>
        <label for="password_confirmation" class="form__label">
            Повторите пароль:
            <input type="password" name="password_confirmation" id="password-confirmation" class="form__input" placeholder="" value="">
        </label>
        <button type="submit" class="form__submit button">
            Создать аккаунт
        </button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\help\resources\views/users/register.blade.php ENDPATH**/ ?>