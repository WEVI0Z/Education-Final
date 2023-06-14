<style>
    .header {
        width: 100%;

        border-bottom: 1px solid black;
    }

    .header__nav {
        padding: 0 20px;
        max-width: 1200px;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
    }

    .header__links {
        display: flex;
        flex-wrap: wrap;
    }

    .header__link {
        margin-right: 20px;
    }

    .header__buttons {
        display: flex;
        flex-wrap: wrap;
    }

    .header__button {
        margin-right: 20px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>

<header class="header">
    <nav class="header__nav">
        <h1 class="header__title">
            <a href="<?php echo e(route("main")); ?>">ЭСО</a>
        </h1>

        <ul class="header__links">
            <li><a href="<?php echo e(route("main")); ?>" class="header__link">Главная</a></li>
            <li><a href="<?php echo e(route("docs", ["category" => "Теория"])); ?>" class="header__link">Теория</a></li>
            <li><a href="<?php echo e(route("docs", ["category" => "Практика"])); ?>" class="header__link">Практика</a></li>
            <li><a href="<?php echo e(route("docs", ["category" => "Тесты"])); ?>" class="header__link">Тесты</a></li>
            <li><a href="<?php echo e(route("materials")); ?>" class="header__link">Материалы</a></li>
        </ul>

        <ul class="header__buttons">
            <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
                <li><a href="<?php echo e(route("edit-account")); ?>" class="header__button button">Аккаунт</a></li>
                <li><a href="<?php echo e(route("logout")); ?>" class="header__button button">Выйти</a></li>
                <?php if(\Illuminate\Support\Facades\Auth::user()->is_admin): ?>
                    <li><a href="<?php echo e(route("admin")); ?>" class="header__button button">Панель администратора</a></li>
                <?php endif; ?>
            <?php else: ?>
                <li><a href="<?php echo e(route("login")); ?>" class="header__button button">Вход</a></li>
                <li><a href="<?php echo e(route("register")); ?>" class="header__button button">Регистрация</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<?php /**PATH C:\OSPanel\domains\help\resources\views/layouts/header.blade.php ENDPATH**/ ?>