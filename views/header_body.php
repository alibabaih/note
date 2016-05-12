<body>
<ul id="dropdown1" class="dropdown-content">
    <li><a href="<?php echo URL; ?>dashboard">Домой</a></li>
    <?php if (Session::get('loggedIn') == true): ?>
        <li><a href="<?php echo URL; ?>users"><?php echo Session::get('login'); ?></a></li>
        <li><a href="<?php echo URL; ?>dashboard/logout">Выйти</a></li>
    <?php endif; ?>

</ul>
<nav>
    <div class="nav-wrapper">
        <a href="<?php echo URL; ?>dashboard" class="brand-logo center" style="text-transform: uppercase; text-shadow: 0px 1px 2px rgba(150, 150, 150, 1); color: white; font-weight: 100;">Блокнот</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse" style="padding: 0 15px;">Меню</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="<?php echo URL ?>dashboard/add">Доб.</a></li>
            <li><a href="<?php echo URL ?>search">Поиск</a></li>
            <li><a href="<?php echo URL; ?>dashboard">Дом</a></li>
            <?php if (Session::get('loggedIn') == true): ?>
                <li><a href="<?php echo URL; ?>users">Юзер</a></li>
                <li><a href="<?php echo URL; ?>dashboard/logout">Выход</a></li>
            <?php endif; ?>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="<?php echo URL ?>dashboard/add"> Добавить запись</a></li>
            <li><a href="<?php echo URL ?>search">Поиск по записям</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo URL; ?>dashboard">Главная</a></li>

            <?php if (Session::get('loggedIn') == true): ?>
                <li><a href="<?php echo URL; ?>users"><?php echo Session::get('login'); ?></a></li>
                <li><a href="<?php echo URL; ?>dashboard/logout">Выйти</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>