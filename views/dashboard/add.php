<div class="row">
    <div class="col offset-s1 s10 offset-m2 m8 offset-l4 l4">
        <div style="margin-top: 30px;" class="card">
            <div class="card-content">
                <form method="post" action="<?php echo URL; ?>dashboard/create">
                    <div class="input-field col s12">
                        <input value="" id="date" name="date" type="date" class="datepicker"
                               placeholder="2015-09-16">
                        <label class="active" for="date">Дата</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="" id="time" name="time" type="text" class="validate"
                               placeholder="12:00">
                        <label class="active" for="time">Время</label>
                    </div>
                    <div class="input-field col s12">
                        <select name="place">
                            <option value="" disabled>Приём будет проходить</option>
                            <?php if (Session::get('role') == 'default'): ?>
                                <option value="<?php echo Session::get('office'); ?>" selected><?php echo Session::get('office'); ?></option>
                            <?php endif; ?>
                            <option value="BOTTOM">Павла Мочалова</option>
                            <option value="TOP">Октябрьская</option>
                        </select>
                        <label>Место проведения</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="" id="name" name="name" type="text" class="validate"
                               placeholder="Валентина Иванова">
                        <label class="active" for="name">Имя Фамилия</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="" id="phone" name="phone" type="text" class="validate"
                               placeholder="8 (904) 923-93-09">
                        <label class="active" for="phone">Мобильный телефон</label>
                    </div>
                    <div class="input-field col s12">
                        <input value="" id="record" name="record" type="text" class="validate"
                               placeholder="Дополнительная информация">
                        <label class="active" for="record">Дополнительная информация</label>
                    </div>
                    <div style="margin-bottom: 20px;" class="input-field col s12">
                        <button style="display: block; margin: 0 auto;" class="btn waves-effect waves-light"
                                type="submit" name="action">Добавить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>