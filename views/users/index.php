<div id="content-wrapper">

    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Пользовательские данные</span>
                </div>
                <div class="panel-body">



                    <?php //foreach($this->usersList as $key => $value) : ?>
                        <?php //echo $value['role']; ?>
                    <?php //endforeach; ?>

                    <p>Логин: <?php echo Session::get('login'); ?></p>
                    <p>Права доступа: <?php echo Session::get('role'); ?></p>
                    <p>Магазин, в котором ведётся работа: <?php echo Session::get('office'); ?></p>
                    <p>Полное имя: <?php echo Session::get('comment'); ?></p>
                </div>
            </div>
        </div>
    </div>


</div>