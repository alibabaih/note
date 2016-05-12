<body>

<nav>
    <div class="nav-wrapper">
        <a href="<?php echo URL; ?>" class="brand-logo center" style="text-transform: uppercase; text-shadow: 0px 1px 2px rgba(150, 150, 150, 1); color: white; font-weight: 100;">Блокнот</a>
    </div>
</nav>

<div class="row">
    <div class="col offset-s2 s8 offset-m3 m6 offset-l4 l4">
        <div class="card-panel" style="margin-top: 70px;">
        <form action="index/run" method="post">
            <div class="input-field">
                <label for="login">Логин</label>
                <input type="text" name="login" id="login" class="validate" placeholder="Логин">
            </div>
            <div class="input-field">
                <label for="password">Логин</label>
                <input type="password" name="password" id="password" class="validate" placeholder="Пароль">
            </div>
            <div class="input-field">
                <button class="btn" style="width: 100%" type="submit" name="action">Войти</button>
            </div>
        </form>
        </div>
    </div>
</div>

