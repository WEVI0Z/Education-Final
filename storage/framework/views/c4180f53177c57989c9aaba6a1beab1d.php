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

        .form__label--file {
            position: relative;
            margin-bottom: 110px;
        }

        .form__label--file::after {
            content: "Выбрать";
            position: absolute;
            top: 30px;
            left: 50%;
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;

            transform: translateX(-50%);
            border: 1px solid black;
            border-radius: 50%;
        }

        .form__label--file:hover::after {
            opacity: 0.5;
            cursor: pointer;
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

    <form action="<?php echo e(route("admin-edit", ["id" => $document->id])); ?>" method="post" class="form" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label for="name" class="form__label">
            Название документа:
            <input type="text" class="form__input" name="name" id="name" placeholder="document123..." value="<?php echo e($document->name); ?>">
        </label>
        <div class="form__label">
            Категория документа:

            <label for="" class="form__label--checkbox">
                <input type="radio" name="category" id="password" class="form__input" value="Теория" <?php if($document->category == "Теория"): ?> checked <?php endif; ?>>
                Теория
            </label>

            <label for="" class="form__label--checkbox">
                <input type="radio" name="category" id="password" class="form__input" value="Практика" <?php if($document->category == "Практика"): ?> checked <?php endif; ?>>
                Практика
            </label>

            <label for="" class="form__label--checkbox">
                <input type="radio" name="category" id="password" class="form__input" value="Тесты" <?php if($document->category == "Тесты"): ?> checked <?php endif; ?>>
                Тесты
            </label>
        </div>
        <button type="submit" class="form__submit button">
            Внести изменения
        </button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\help\resources\views/admin/edit.blade.php ENDPATH**/ ?>